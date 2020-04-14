<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    //
    protected $fillable=['name', 'email','password', 'phone', 'institution', 'parentName', 'parentEmail', 'parentPhone','qualification','salaryStatus', 'userType'];
}
