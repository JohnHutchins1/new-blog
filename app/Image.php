<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //changing the table name to images
    protected $table = 'images';
    //can also change the primary key
    public $primaryKey = 'id';
    //saying we don't want time stamps from our model
    public $timestamps = false;
}
