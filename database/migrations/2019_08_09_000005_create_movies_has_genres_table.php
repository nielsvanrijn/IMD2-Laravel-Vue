<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesHasGenresTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'movies_has_genres';

    /**
     * Run the migrations.
     * @table movies_has_genres
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->integer('movies_id')->unsigned();
            $table->integer('genres_id')->unsigned();

            $table->foreign('movies_id')->references('id')->on('movies')->onDelete('cascade');
            $table->foreign('genres_id')->references('id')->on('genres')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->tableName);
     }
}