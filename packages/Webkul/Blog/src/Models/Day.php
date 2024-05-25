<?php

namespace Webkul\Blog\Models;

use Illuminate\Database\Eloquent\Model;
use Webkul\Blog\Contracts\Day as DayContract;

class Day extends Model implements DayContract
{
    protected $table = 'daies';
    protected $fillable = ['day','day_of_weak','from_time','to_time'];
}