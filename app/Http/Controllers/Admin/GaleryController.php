<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Galery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleryController extends Controller
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
        $galeries = Galery::get();
        return view('layouts.admin.galeri.index', [
            'galeries' => $galeries
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.admin.galeri.create');
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
            'image' => 'required|image|mimes:png,jpg,jpeg',
            'title' => 'required',
            'body' => 'required',
        ]);

        $image = $request->file('image');
        $image->store('galery', 'public');

        $galery = Galery::create([
            'image' => $image->hashName(),
            'title' => $request->title,
            'body' => $request->body,
        ]);

        if ($galery) {
            // redirect kalau sukses
            return redirect()->route('galery.index')->with(['success' => 'Data Berhasil Disimpan']);
        } else {
            // redirect kalau tidak sukses
            return redirect()->route('galery.index')->with(['failed' => 'Data Gagal Disimpan']);
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
    public function edit(Galery $galery)
    {
        return view('layouts.admin.galeri.edit',compact('galery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Galery $galery)
    {
        $this->validate($request, [
            'title'     => 'required',
            'body'   => 'required',
        ]);

        //get data galery by ID
        $galery = Galery::findOrFail($galery->id);

        if ($request->file('image') == "") {

            $galery->update([
                'title'     => $request->title,
                'body'   => $request->body,
            ]);
        } else {

            // hapus image
            $delete = Galery::findOrFail($galery->id);
            $file = public_path('storage/galery/') . $delete->image;
            if (file_exists($file)) {
                @unlink($file);
            }
            Storage::delete($file);

            // new
            $image = $request->file('image');
            $image->store('galery', 'public');

            $galery->update([

                'title'     => $request->title,
                'body'   => $request->body,
                'image'     => $image->hashName(),
            ]);
        }

        if ($galery) {
            //redirect dengan pesan sukses
            return redirect()->route('galery.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('galery.index')->with(['error' => 'Data Gagal Diupdate!']);
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
        $delete = Galery::findOrFail($id);
        $file = public_path('storage/galery/') . $delete->image;
        if (file_exists($file)) {
            @unlink($file);
        }
        $delete->delete();
        return redirect()->route('galery.index')->with(['success', 'Data Berhasil Dihapus']);
    }
}
