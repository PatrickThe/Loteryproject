<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Referral extends Model
{
    //
    protected $table='referrals';
    protected $fillable = [
        'user_id', 'referred_id'
    ];
}

