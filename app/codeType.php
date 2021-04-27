<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\CodeTypeIcon;
class CodeType extends Model {

   use SoftDeletes;
   protected $fillable = ['userId', 'codeType', 'iconId'];
   
   public function codeTypeIcon(){
   	return $this->belongsTo(CodeTypeIcon::class, 'codeTypeIconId', 'id');
	}
}


