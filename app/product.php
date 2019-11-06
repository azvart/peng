<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
 public $fillable=[
 	'name','price','body','small_body','showhide','picture','status','user_id','category_id'
 ];
}
