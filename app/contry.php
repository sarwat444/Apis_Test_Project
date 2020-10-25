<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contry extends Model
{
 protected $table  = '_z_country';
 public $timestamps = false  ; 
 protected $fillable = ['iso','name','dname' ,'iso3','position','numcode','phonecode','created','register_by','modified','modified_by','record_deleted'];
 
}
