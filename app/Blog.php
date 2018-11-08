<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Blog extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title','content','featured','slug','user_id'
    ];

    public function getFeaturedAttribute($featured)
    {
        return asset($featured);
    }

    protected $dates = ['deleted_at'];


    public function user()
    {
        return $this->belongsTo('App\User');
    }



}
