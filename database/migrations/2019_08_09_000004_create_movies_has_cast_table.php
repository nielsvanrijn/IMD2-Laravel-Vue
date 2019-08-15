<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesHasCastTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'movies_has_cast';

    /**
     * Run the migrations.
     * @table movies_has_cast
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->integer('movies_id')->unsigned();
            $table->integer('cast_id')->unsigned();

            $table->foreign('movies_id')->references('id')->on('movies')->onDelete('cascade');
            $table->foreign('cast_id')->references('id')->on('casts')->onDelete('cascade');
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