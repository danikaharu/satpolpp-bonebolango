<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Regulation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class RegulationController extends Controller
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
        $regulation = Regulation::get();
        return view('layouts.admin.regulasi.index', [
            'regulation' => $regulation,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.admin.regulasi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dd($request);

        $this->validate($request, [
            'title' => 'required|unique:regulations|min:5',
            'description' => 'required|min:5',
            'document' => 'required|mimes:pdf',
        ]);

        $data = new Regulation();

        $document = $request->document;
        $filename = time() . '.' . $document->getClientOriginalExtension();
        $request->document->move(public_path('storage/regulation/'), $filename);
        $data->document = $filename;
        $data->slug =  Str::slug($request->title);
        $data->title = $request->title;
        $data->description = $request->description;

        $data->save();
        return redirect()->route('regulation.index')->with(['success', 'Berhasil Upload Dokumen']);
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
    public function edit(Regulation $regulation)
    {
        return view('layouts.admin.regulasi.edit', compact('regulation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Regulation $regulation)
    {

        //get data news by ID


        $regulation = Regulation::findOrFail($regulation->id);
        if ($request->file('document') == "") {
            $this->validate($request, [
                'title' => 'required|min:5',
                'description' => 'required|min:5',
            ]);

            $regulation->update([
                'slug' =>  Str::slug($request->title),
                'title'  => $request->title,
                'description' => $request->description,
            ]);
        } else {

            $this->validate($request, [
                'title' => 'required|min:5',
                'description' => 'required|min:5',
                'document' => 'required|mimes:pdf',
            ]);

            // hapus document
            $delete = Regulation::findOrFail($regulation->id);
            $file = public_path('storage/regulation/') . $delete->document;
            if (file_exists($file)) {
                @unlink($file);
            }
            Storage::delete($file);

            // new Data

            $document = $request->document;
            $filename = time() . '.' . $document->getClientOriginalExtension();
            $request->document->move(public_path('storage/regulation/'), $filename);

            $regulation->update([
                'document' => $filename,
                'slug' =>  Str::slug($request->title),
                'title'  => $request->title,
                'description' => $request->description,
            ]);
        }

        return redirect()->route('regulation.index')->with(['success', 'Berhasil Upload Dokumen']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $delete = Regulation::findOrFail($slug);
        $file = public_path('storage/regulation/') . $delete->document;
        if (file_exists($file)) {
            @unlink($file);
        }
        $delete->delete();
        return redirect()->route('regulation.index')->with(['success', 'Data Berhasil Dihapus']);
    }
}
