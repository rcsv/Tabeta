<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDinersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diners', function (Blueprint $table) {
            $table->increments('id');

            // Dinner's name. it is probably not unique...
            $table->string( 'name' ) ;

            // name's ruby. 
            $table->string( 'ruby' ) ;

            // phone call
            $table->string( 'phone' ) ;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diners');
    }

}
