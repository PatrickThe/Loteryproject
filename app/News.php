<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $guarded=['id'];
    protected $fillable = [
        'headline',
        'details',
        'user_id',
        'image'
    ];
    
}
