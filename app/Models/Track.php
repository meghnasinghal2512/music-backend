<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
  protected $fillable = [
      'name','genres_id','rating',
      ];

}
