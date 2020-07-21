<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    //filable feild
    protected $fillable = ['name', 'email', 'phone', 'address', 'grade'];
}
