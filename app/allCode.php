<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class allCode extends Model {
   use SoftDeletes;
   protected $fillable = ['codeTypeId', 'codeTitle', 'code'];
}
