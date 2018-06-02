<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArabicSectionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {

            $table->string('imgFour')->nullable();
            $table->string('imgFive')->nullable();
            $table->string('imgSix')->nullable();
            $table->string('imgSeven')->nullable();


            $table->string('ar_name')->after('name');
            $table->string('ar_details')->after('details');
            $table->string('ar_descreption')->after('descreption');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
    {
        
 Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('imgFour');
            $table->dropColumn('imgFive');
            $table->dropColumn('imgSix');
            $table->dropColumn('imgSeven');

            $table->dropColumn('ar_name');
            $table->dropColumn('ar_details');
            $table->dropColumn('ar_descreption');

            
        });

    }
}
