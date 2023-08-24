<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Profile;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

class ProfileController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function show($slug)
    {
        $profile = Profile::where('slug', $slug)->firstOrFail();
        return view('layouts.admin.profile.index', ['profile' => $profile]);
    }

    public function edit(Profile $profile)
    {
        return view('layouts.admin.profile.index', compact('profile'));
    }

    public function update(Request $request, Profile $profile)
    {
        $this->validate($request, [
            'title'   => 'required|min:5',
            'content'   => 'required|min:5',
        ]);

        // summernote save image

        $dom = new \DOMDocument();
        libxml_use_internal_errors(true);
        $dom->loadHTML($request->content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $images = $dom->getElementsByTagName('img');

        foreach ($images as $img) {
            $src = $img->getAttribute('src');
            if (preg_match('/data:image/', $src)) {
                // preg_match('/data:image\/(?.*?)\;/',$src,$groups);
                preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                $mimetype = $groups['mime'];
                $path = 'storage/profile/';
                $filename = uniqid() . '.' . $mimetype;
                $filepath =  $path . $filename;

                if (!file_exists($path)) {
                    mkdir($path, 0777, true);
                }

                $image = Image::make($src)->encode($mimetype, 100)->save($filepath);

                $new_src = asset($filepath);
                $img->removeAttribute('src');
                $img->setAttribute('src', $new_src);
            }
        }

        $profile->update([
            'title'  => $request->title,
            'slug' => Str::slug($request->title),
            'content' => $dom->saveHTML(),
        ]);

        return redirect()
            ->back()
            ->with('success', __('Data berhasil dibuat.'));
    }
}
