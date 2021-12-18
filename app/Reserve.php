<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
    protected $fillable = [
        'tour',
        'name', 
        'email',
        'phone',
        'arrive',
        'departure',
        'adults', 
        'children',
        'nationality',
        'receive',
        'authorize',
        'additional'
    ];
}
