<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCodeTypesTable extends Migration {
   public function up(){
      Schema::create('code_types', function (Blueprint $table) {
         $table->id();
         $table->integer('userId');
         $table->string('codeType');
         $table->string('iconId')->nullable();      
         $table->timestamps();
         $table->softDeletes();
      });
   }

   public function down(){
      Schema::dropIfExists('code_types');
   }
}
