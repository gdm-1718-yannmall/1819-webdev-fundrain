<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    public function project()
    {
        return $this->hasMany(Project::class);
    }
}
