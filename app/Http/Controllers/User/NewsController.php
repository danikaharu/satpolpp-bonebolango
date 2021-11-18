<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Admin\News;


class NewsController extends Controller
{
    public function index()
    {
        $news1 = News::latest()->paginate(4);
        $news2 = News::latest()->limit(4)->get();
        return view('layouts.user.news', compact('news1', 'news2'));
    }

    public function show($slug)
    {
        $shareNews = \Share::page(
            'https://www.positronx.io/create-autocomplete-search-in-laravel-with-typeahead-js/',
            'Your share text comes here'
        )
            ->facebook()
            ->whatsapp();

        $news = News::where('slug', $slug)->first();
        $recentNews = News::latest()->limit(4)->get();
        return view('layouts.user.newsDetail', compact('news', 'recentNews', 'shareNews'));
    }
}
