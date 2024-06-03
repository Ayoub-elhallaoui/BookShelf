<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title', 'author', 'description', 'cover', 'category', 'genre',
    ];


    public function Category()
    {
        return $this->hasMany('App\Category');
    }

    public function Genres()
    {
        return $this->hasMany('App\Genre');
    }

}
