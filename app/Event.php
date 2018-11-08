<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'title','description','date','featured','slug','location'
    ];

    public function getFeaturedAttribute($featured)
    {
        return asset($featured);
    }
}
