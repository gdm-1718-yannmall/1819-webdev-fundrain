<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Page;

class NewsController extends Controller
{
    public function index()
    {
        $articles = Article::all()->sortByDesc('created_at');
        $navItems = Page::all('title');
        return view('news.overview', compact('articles', 'navItems'));
    }

    public function show(Article $article)
    {
        $navItems = Page::all('title');
        return view('news.detail', compact('article', 'navItems'));
    }
}
