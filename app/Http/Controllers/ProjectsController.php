<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Categorie;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        $categories = Categorie::all();
        return view('projects.index', compact('projects', 'categories'));
    }

    public function show(Project $project)
    {   
        return view('projects.show', compact('project'));
    }

    public function create()
    {
        
        $categories = Categorie::all();
        return view('projects.create', compact('categories'));
    }

    public function store()
    {
        $categorie = Categorie::where('name', request('categorie'))->first();
        //dd($categorie->id);
        $attributes = request()->validate([
            'name'=> ['required', 'min:3'],
            'description'=>['required', 'min:4'],
            'image'=>['nullable'],
        ]);

        $attributes['owner_id'] = auth()->id();
        $attributes['categorie_id'] = $categorie->id;


        Project::create($attributes);

        return redirect('/projects');
    }
}
