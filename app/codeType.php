<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class codeType extends Model {
   use SoftDeletes;
   public $timestamps = true;
   protected $fillable = ['userId','addItem','created_at'];

}
