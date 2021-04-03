<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllCodesTable extends Migration{
   public function up(){
      Schema::create('all_codes', function (Blueprint $table) {
         $table->id();
         $table->integer('codeTypeId');
         $table->text('codeTitle');
         $table->longText('code');
         $table->timestamps();
         $table->softDeletes();
      });
   }

   public function down(){
      Schema::dropIfExists('all_codes');
   }
}
