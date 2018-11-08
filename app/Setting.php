<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = ['site_name','logo','site_description','address','contact_number','contact_email'];


    public function getLogoAttribute($logo)
    {
        return asset($logo);
    }
}