<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lyric extends Model
{
    protected $fillable = [
    	'title', 'lyrics', 'slug'
    ];
}
