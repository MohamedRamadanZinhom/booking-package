<?php

namespace Webkul\Blog\Models;

use Illuminate\Database\Eloquent\Model;
use Webkul\Blog\Contracts\ExceptionDate as ExceptionDateContract;

class ExceptionDate extends Model implements ExceptionDateContract
{
    protected $table = 'exceptions_date';
    protected $fillable = ['date','from','to','is_available'];

}