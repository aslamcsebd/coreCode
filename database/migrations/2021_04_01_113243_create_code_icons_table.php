<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCodeIconsTable extends Migration {

   public function up() {
      Schema::create('code_icons', function (Blueprint $table) {
         $table->id();
         $table->string('icon');
         $table->timestamps();
         $table->softDeletes();
      });
   }

   public function down(){
      Schema::dropIfExists('code_icons');
   }
}
