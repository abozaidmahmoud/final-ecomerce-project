<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DesginExtraCoulmn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('desgins', function (Blueprint $table) {

                $table->string('content1')->nullable();
                $table->string('content2')->nullable();
                $table->string('content3')->nullable();
                $table->string('image2')->nullable();
                $table->string('image3')->nullable();


           
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
            $table->dropColumn('content1');
            $table->dropColumn('content2');
            $table->dropColumn('content3');
            $table->dropColumn('image2')->nullable();
            $table->dropColumn('image3')->nullable();
            
        });
    }
}
