<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

Class Subscribers Extends Model{
    protected $table = 'newsletters';
    protected $fillable = array('email');
}