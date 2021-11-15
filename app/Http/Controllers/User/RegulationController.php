<?php

namespace App\Http\Controllers\User;

use App\Models\Admin\Regulation;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class RegulationController extends Controller
{
    public function index()
    {
        $regulation = Regulation::latest()->paginate(9);
        return view('layouts.user.regulation', [
            'regulation' => $regulation,
        ]);
    }

    public function download($slug)
    {
        $regulation = Regulation::where('slug', $slug)->first();

        $file = $regulation->document;

        if (Storage::disk('download')->exists($file)) {

            $path = public_path('/storage/regulation/' . $file);

            return response()->download($path);
        } else {
            abort(404);
        }
    }
}
