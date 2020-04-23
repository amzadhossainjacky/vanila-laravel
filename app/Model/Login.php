<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    //
    protected $fillable =[
        'uname', 'uemail', 'upassword', 'utype', 'ustatus', 'regid'
    ];

  //  protected $primaryKey = 'id';

}
