<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
     protected $fillable = [
        'name', 'generes_id', 'rating', 'active'
    ];
    
}
