<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // public $timestamps = false;
    protected $fillable = ['title', 'description'];
}
