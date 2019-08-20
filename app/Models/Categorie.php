<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use SoftDeletes;
    
    public function project()
    {
        return $this->hasMany(Project::class);
    }
}
