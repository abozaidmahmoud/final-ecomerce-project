<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotoDesgins extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::table('desgins', function (Blueprint $table) {

               $table->string('photo')->nullable();
                $table->string('text')->nullable();
                $table->string('place')->nullable();


           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::table('desgins', function (Blueprint $table) {
            $table->dropColumn('photo');
            $table->dropColumn('text');
            $table->dropColumn('place');
            
        });
    }
}
