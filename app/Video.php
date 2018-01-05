<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Video extends Model
{
    protected $table = 'video';

    use SoftDeletes;

    protected $data = ['deleted_at'];
}


