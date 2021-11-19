<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Admin\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::latest()->paginate(4);
        $recentNews = News::latest()->limit(4)->get();
        return view('layouts.user.news', compact('news', 'recentNews'));
    }

    public function show(News $news)
    {
        $recentNews = News::latest()->limit(4)->get();

        return view('layouts.user.newsDetail', compact('news', 'recentNews'));
    }

    public function search(Request $request)
    {
        $search = $request->search;

        dd($search);

        $news = News::where('title', 'like', '%' . $search . '%')->get();
        $recentNews = News::latest()->limit(4)->get();
        return view('layouts.user.newsSearch', compact('news', 'recentNews'));
    }
}
