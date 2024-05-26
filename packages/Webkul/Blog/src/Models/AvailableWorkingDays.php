<?php

namespace Webkul\Blog\Models;

use Illuminate\Database\Eloquent\Model;
use Webkul\Blog\Contracts\AvailableWorkingDays as AvailableWorkingDaysContract;

class AvailableWorkingDays extends Model implements AvailableWorkingDaysContract
{
    protected $table = 'available_working_days';
    protected $fillable = ['day','from','to'];
    
}