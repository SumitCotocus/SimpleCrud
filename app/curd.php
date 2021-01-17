<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class curd extends Model
{
    protected $table='curds';  
    protected $fillable=['name','email','subject','message','image'];  

}
