<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class WordOnPhotoCategory extends Migration
{
   
 public function up()
    {
        Schema::table('pcategories', function (Blueprint $table) {

                $table->string('content1')->nullable();
                $table->string('content2')->nullable();
                $table->string('content1_ar')->nullable();
                $table->string('content2_ar')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::table('pcategories', function (Blueprint $table) {
            $table->dropColumn('content1');
            $table->dropColumn('content2');
            $table->dropColumn('content1_ar');
            $table->dropColumn('content2_ar');
            
           
            
        });
    }




}
