<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
class Registration extends Model
{
    //
    protected $fillable=['name', 'email','password', 'phone', 'institution', 'parentName', 'parentEmail', 'parentPhone','qualification','salaryStatus'];

   // protected $primaryKey = 'regid';

    /* public function utype()
    {
        return $this->hasOne(Login::class);
       // ->where('utype','student');
    } */


}
