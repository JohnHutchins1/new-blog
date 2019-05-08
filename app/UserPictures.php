<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserPictures extends Model
{
     //changing the table name to images
     protected $table = 'user_pictures';
     //can also change the primary key
     public $primaryKey = 'id';
     //saying we don't want to query time stamps from our model with all()
     public $timestamps = false;

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
     'user_id', 'img_id',
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
          'added_on' => 'datetime',
     ];
     
}
