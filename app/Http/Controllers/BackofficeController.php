<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Categorie;
use App\Models\Comment;
use App\User;

class BackofficeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $current_user = auth()->user();
        $projects = Project::all();
        $comments = Comment::all();
        $categories = Categorie::all();
        $users = User::all();

        $projects['reached_goal'] = Project::whereColumn('funds_goal', '<=', 'funds_state');
        return view('backoffice.home', compact('current_user', 'users', 'projects', 'comments', 'categories'));
    }

    public function users()
    {
       
    }
}
