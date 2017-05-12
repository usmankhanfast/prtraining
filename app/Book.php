<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'bookd';
    protected $fillable = [
    	'isbn',
    	'title',
    	'author',
    	'publisher',
    	'image'
    ];
}
