<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contributor extends Model
{
    protected $fillable = ['id','avatar','name','facebook','twitter','linkedin','github','about'];
}
