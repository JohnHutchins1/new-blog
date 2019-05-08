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

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'path', 'location',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',

    ];
}
