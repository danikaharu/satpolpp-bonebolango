<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\News;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        $news = News::get();
        return view('layouts.admin.berita.index', [
            'news' => $news,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        

        return view('layouts.admin.berita.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|unique:news|min:5',
            'body' => 'required|min:5',
            'image' => 'required|image|mimes:png,jpg,jpeg',
        ]);

        // summernote save image

        $dom = new \DOMDocument();
        $dom->loadHTML($request->body, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $images = $dom->getElementsByTagName('img');

        foreach ($images as $img) {
            $src = $img->getAttribute('src');
            if (preg_match('/data:image/', $src)) {
                // preg_match('/data:image\/(?.*?)\;/',$src,$groups);
                preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                $mimetype = $groups['mime'];
                $filename = uniqid();
                $filepath = ("storage/news/image/$filename.$mimetype");

                $image = Image::make($src)->encode($mimetype, 100)->save(public_path($filepath));

                $new_src = asset($filepath);
                $img->removeAttribute('src');
                $img->setAttribute('src', $new_src);
            }
        }

        // batas

        $image = $request->file('image');
        $image->store('news', 'public');

        $news = News::create([
            'title' => $request->title,
            'body' => $dom->saveHTML(),
            'image' => $image->hashName(),
        ]);

        if ($news) {
            // redirect kalau sukses
            return redirect()->route('news.index')->with(['success' => 'Data Berhasil Disimpan']);
        } else {
            // redirect kalau tidak sukses
            return redirect()->route('news.index')->with(['failed' => 'Data Gagal Disimpan']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        return view('layouts.admin.berita.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        $this->validate($request, [
            'title'  => 'required',
            'body'   => 'required',
        ]);

        // summernote save image

        $dom = new \DOMDocument();
        $dom->loadHTML($request->body, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $images = $dom->getElementsByTagName('img');

        foreach ($images as $img) {
            $src = $img->getAttribute('src');
            if (preg_match('/data:image/', $src)) {
                // preg_match('/data:image\/(?.*?)\;/',$src,$groups);
                preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                $mimetype = $groups['mime'];
                $filename = uniqid();
                $filepath = ("storage/news/image/$filename.$mimetype");

                $image = Image::make($src)->encode($mimetype, 100)->save(public_path($filepath));

                $new_src = asset($filepath);
                $img->removeAttribute('src');
                $img->setAttribute('src', $new_src);
            }
        }

        // batas

        //get data news by ID
        $news = News::findOrFail($news->id);



        if ($request->file('image') == "") {

            $news->update([
                'title'  => $request->title,
                'body' => $dom->saveHTML(),
            ]);
        } else {

            // hapus image
            $delete = News::findOrFail($news->id);
            $file = public_path('storage/news/') . $delete->image;
            if (file_exists($file)) {
                @unlink($file);
            }
            Storage::delete($file);

            // Upload Kembali Data
            $image = $request->file('image');
            $image->store('news', 'public');

            $news->update([
                'title'  => $request->title,
                'body'   => $dom->saveHTML(),
                'image'  => $image->hashName(),
            ]);
        }

        if ($news) {
            //redirect dengan pesan sukses
            return redirect()->route('news.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('news.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = News::findOrFail($id);
        $file = public_path('storage/news/') . $delete->image;
        if (file_exists($file)) {
            @unlink($file);
        }
        $delete->delete();
        return redirect()->route('news.index')->with(['success', 'Data Berhasil Dihapus']);
    }
}
