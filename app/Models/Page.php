<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $casts = [
        'intro' => 'array',
        'content' => 'array',
    ];
    public function getData($page)  
    {
       return Page::where('title', $page)->firstOrFail();
    }
}
