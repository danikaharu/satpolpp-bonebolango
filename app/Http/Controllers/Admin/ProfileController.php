<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Profile;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
 
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        $profiles = Profile::find(1);
        return view('layouts.admin.profile.index', [
            'profiles' => $profiles,
        ]);
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

        $profile = Profile::findOrFail($profile->id);

        $profile->update([
            'title'  => $request->title,
            'content' => $request->content,
        ]);

        if ($profile) {
            //redirect dengan pesan sukses
            return redirect()->route('profile.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('profile.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    public function visionmission()
    {
        $profiles = Profile::find(2);
        return view('layouts.admin.profile.visimisi', [
            'profiles' => $profiles,
        ]);
    }

    public function editvisionmission(Profile $profile)
    {
        return view('layouts.admin.profile.visimisi', compact('profile'));
    }

    public function updatevisionmission(Request $request, Profile $profile)
    {
        $this->validate($request, [
            'title'   => 'required|min:5',
            'content'   => 'required|min:5',
        ]);

        $profile = Profile::findOrFail($profile->id);

        $profile->update([
            'title'  => $request->title,
            'content' => $request->content,
        ]);

        if ($profile) {
            //redirect dengan pesan sukses
            return redirect()->route('visionmission.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('visionmission.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    public function tupoksi()
    {
        $profiles = Profile::find(3);
        return view('layouts.admin.profile.tupoksi', [
            'profiles' => $profiles,
        ]);
    }

    public function edittupoksi(Profile $profile)
    {
        return view('layouts.admin.profile.tupoksi', compact('profile'));
    }

    public function updatetupoksi(Request $request, Profile $profile)
    {
        $this->validate($request, [
            'title'   => 'required|min:5',
            'content'   => 'required|min:5',
        ]);

        $profile = Profile::findOrFail($profile->id);

        $profile->update([
            'title'  => $request->title,
            'content' => $request->content,
        ]);

        if ($profile) {
            //redirect dengan pesan sukses
            return redirect()->route('tupoksi.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('tupoksi.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    public function unitjabatan()
    {
        $profiles = Profile::find(4);
        return view('layouts.admin.profile.unitjabatan', [
            'profiles' => $profiles,
        ]);
    }

    public function editunitjabatan(Profile $profile)
    {
        return view('layouts.admin.profile.unitjabatan', compact('profile'));
    }

    public function updateunitjabatan(Request $request, Profile $profile)
    {
        $this->validate($request, [
            'title'   => 'required|min:5',
            'content'   => 'required|min:5',
        ]);

        $profile = Profile::findOrFail($profile->id);

        $profile->update([
            'title'  => $request->title,
            'content' => $request->content,
        ]);

        if ($profile) {
            //redirect dengan pesan sukses
            return redirect()->route('unitjabatan.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('unitjabatan.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    public function struktur()
    {
        $profiles = Profile::find(5);
        return view('layouts.admin.profile.struktur', [
            'profiles' => $profiles,
        ]);
    }

    public function editstruktur(Profile $profile)
    {
        return view('layouts.admin.profile.struktur', compact('profile'));
    }

    public function updatestruktur(Request $request, Profile $profile)
    {
        $this->validate($request, [
            'title'   => 'required|min:5',
            'content'   => 'required|min:5',
        ]);

        $profile = Profile::findOrFail($profile->id);

        $profile->update([
            'title'  => $request->title,
            'content' => $request->content,
        ]);

        if ($profile) {
            //redirect dengan pesan sukses
            return redirect()->route('struktur.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('struktur.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

}
