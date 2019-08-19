<?php

namespace App\Http\Controllers;
use App\Models\Project;

use Illuminate\Http\Request;

class ProjectCommentController extends Controller
{
    public function store(Project $project)     
    {
        $attributes = request()->validate(['content' => 'required']);
        $attributes['owner_id'] = auth()->id();
        $project->addComment($attributes);

        return back();
    }
}
