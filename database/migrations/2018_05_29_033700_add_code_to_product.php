<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCodeToProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::table('products', function (Blueprint $table) {

                $table->string('code')->nullable();
                $table->string('color')->nullable();
                $table->string('extra-word')->nullable();


           
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
            $table->dropColumn('code');
            $table->dropColumn('color');
            $table->dropColumn('extra-word');
            
        });
    }
}
