<?php

namespace App\Http\Controllers\Admin\Complaints;

use App\Http\Controllers\Controller;
use App\Models\Admin\Complaint;
use App\Models\Admin\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ComplaintController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct() {
        $this->middleware(['auth']);
    }

    public function index()
    {
        $complaints = Complaint::get();
        // dd($complaints);
        return view('layouts.admin.pengaduan.index', [
            'complaints' => $complaints,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view()
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
            'name' => 'required',
            'email' => 'required|email',
            'title' => 'required|min:5',
            'description' => 'required',
        ]);

        $complaint = Complaint::create([
            'name' => $request->name,
            'slug' =>  Str::slug($request->name),
            'email' => $request->email,
            'title' => $request->title,
            'description' => $request->description,
            'status' => '0',
        ]);

        if ($complaint) {
            // redirect kalau sukses
            return redirect()->route('pengaduan')->with(['success' => 'Data Berhasil Disimpan']);
        } else {
            // redirect kalau tidak sukses
            return redirect()->route('pengaduan')->with(['failed' => 'Data Gagal Disimpan']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        // dd(Complaint::all());
        $complaint = Complaint::where('slug', $slug)->first();

        $response = Response::where('complaint_id', $slug)->first();
        return view('layouts.admin.pengaduan.show', ['complaint' => $complaint, 'response' => $response]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
