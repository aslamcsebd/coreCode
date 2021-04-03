<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CodeType extends Model {

   use SoftDeletes;
   protected $fillable = ['userId', 'codeType', 'iconId'];
}


