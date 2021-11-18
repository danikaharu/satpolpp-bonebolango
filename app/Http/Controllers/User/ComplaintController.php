<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Admin\Complaint;
use Illuminate\Http\Request;

class ComplaintController extends Controller
{
    public function index()
    {
        $complaint = Complaint::latest()->paginate(4);
        return view('layouts.user.complaint', compact('complaint'));
    }

    public function show($slug)
    {
        $complaint = Complaint::where('slug', $slug)->first();

        return view('layouts.user.complaintDetail', compact('complaint'));
    }
}
