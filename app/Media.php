<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    
protected $table = 'medias';
  protected $fillable = ['lien','galerie_img', 'created_at', 'deleted_at'];

}
