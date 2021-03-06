<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\User;

class Comment extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'content',
        'owner_id'
    ];
    
    public function project()   
    {
        return $this->belongsTo(Project::class);
    }

    public function user()   
    {
        return $this->belongsTo(User::class, 'owner_id');
    }
}
