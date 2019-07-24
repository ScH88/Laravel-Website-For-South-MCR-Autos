<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    //Table Name
    protected $table = 'car';
    //Primary Key
    protected $primaryKey = 'id';
    //Timestamps
    public $timestamps = false;

}
