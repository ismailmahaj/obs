<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

Class Newsletter Extends Model{
    protected $table = 'newsletters';
    protected $fillable = array('email');
}