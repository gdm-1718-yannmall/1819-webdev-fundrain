<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Categorie;

class ProjectsBackofficeController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        $categories = Categorie::all();
        return view('backoffice.projects.index', compact('projects', 'categories'));
    }

    public function create()
    {
        
        $categories = Categorie::all();
        return view('backoffice.projects.create', compact('categories'));
    }

    public function edit(Project $project)
    {
        
        $categories = Categorie::all();
        return view('backoffice.projects.edit', compact('categories', 'project'));
    }

    public function store()
    {
        $categorie = Categorie::where('name', request('categorie'))->first();
        //dd($categorie->id);
        $attributes = request()->validate([
            'name'=> ['required', 'min:3'],
            'description'=>['required', 'min:4'],
            'image'=>['nullable'],
            'funds_goal' => ['required', 'integer'],
        ]);

        $attributes['owner_id'] = auth()->id();
        $attributes['categorie_id'] = $categorie->id;


        Project::create($attributes);

        return redirect('/backoffice/projects');
    }

    public function update(Project $project)
    {
        $categorie = Categorie::where('name', request('categorie'))->first();
        //dd($categorie->id);
        $attributes = request()->validate([
            'name'=> ['required', 'min:3'],
            'description'=>['required', 'min:4'],
            'image'=>['nullable'],
            'funds_goal' => ['required'],
        ]);

        $attributes['categorie_id'] = $categorie->id;

        $project->update($attributes);

        return redirect('/backoffice/projects');
    }

    public function destroy(Project $project)
    {
        $project->delete();

        return redirect('/backoffice/projects');
    }
}
