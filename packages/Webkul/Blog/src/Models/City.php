<?php

namespace Webkul\Blog\Models;

use Illuminate\Database\Eloquent\Model;
use Webkul\Blog\Contracts\City as CityContract;

class City extends Model implements CityContract
{
    protected $fillable = ['name','travel_cost'];
    
}