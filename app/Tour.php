<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tour extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'destiny', 
        'name',
        'slug',
        'unit_price',
        'main_img',
        'duration',
        'type',
        'size',
        'language',
        'description',
        'itinerary',
        'include',
        'recomendation',
        'prices',
        'img_1',
        'img_2',
        'img_3',
        'relevant'
    ];

    protected $dates = ['deleted_at'];
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
