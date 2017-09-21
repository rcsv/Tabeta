<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksPhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books_photos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer( 'book_id' )->unsigned() ;
            $table->foreign( 'book_id' )->references('id')->on('books');
            $table->string('filename') ;
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
        Schema::dropIfExists('books_photos');
    }
}
