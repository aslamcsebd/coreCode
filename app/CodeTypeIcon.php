<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CodeTypeIcon extends Model
{
   use SoftDeletes;
   protected $fillable = ['iconName', 'iconLink'];
}
