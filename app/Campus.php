<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campus extends Model
{
    protected $fillable = ['id','slug','name','facebook','twitter','linkedin','github','content','about','featured'];
}
