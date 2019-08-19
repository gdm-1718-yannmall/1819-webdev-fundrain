<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Categorie;
use App\User;

class Project extends Model
{
    protected $fillable = [
        "name",
        "description",
        "owner_id",
        "image",
        "categorie_id"
    ];
    public function categorie()
    {
        return $this->belongsTo(Categorie::class, 'categorie_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }

    public function addComment($comment)
    {
        $this->comments()->create($comment);
    }
}
