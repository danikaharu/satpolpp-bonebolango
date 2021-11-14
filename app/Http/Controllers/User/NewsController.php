<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Admin\News;


class NewsController extends Controller
{
    public function index()
    {
        $news = News::latest()->paginate(1);
        return view('layouts.user.news', compact('news'));
    }
}
