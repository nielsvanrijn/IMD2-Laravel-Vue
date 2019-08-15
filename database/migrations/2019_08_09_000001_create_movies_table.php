<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'movies';

    /**
     * Run the migrations.
     * @table movies
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 100);
            $table->year('year', 4);
            $table->decimal('score', 2, 1)->nullable();
            $table->longText('description')->nullable();
            $table->decimal('duration', 4, 2)->nullable();
            $table->longText('trailer_url')->nullable();
            $table->longText('poster_url')->nullable();
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
       Schema::dropIfExists($this->tableName);
     }
}