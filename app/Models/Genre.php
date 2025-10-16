<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $table = 'genres';

    //mass assignment
    protected $fillable =[
        'name', 'description'
    ];
}
