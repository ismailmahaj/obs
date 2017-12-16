<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model

{

    protected $fillable = ['titre','date','lieu','adresse','description','lien_billetterie','lien_image'];

}