<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    protected $fillable=['courseType', 'batch','classTime', 'classDay', 'fees', 'status', 'uid'];
}
