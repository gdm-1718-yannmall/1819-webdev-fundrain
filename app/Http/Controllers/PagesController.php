<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Project;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.welcome');
    }

    public function home(Page $page)
    {
        $pageData = $page->getData('home');
        $projects = Project::with('user', 'categorie')->get()->sortByDesc('created_at');
        return view('pages.home', compact('pageData', 'projects'));
    }

    public function services(Page $page)
    {
        $pageData = $page->getData('services');
        return view('pages.about', compact('pageData'));
    }

    public function about(Page $page) 
    {
        $pageData = $page->getData('about');
        return view('pages.about', compact('pageData'));
    }

    public function contact(Page $page)
    {
        
    }

}
