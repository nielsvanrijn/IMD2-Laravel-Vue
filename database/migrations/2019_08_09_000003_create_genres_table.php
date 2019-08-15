<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGenresTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'genres';

    /**
     * Run the migrations.
     * @table genres
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('genres'))
        {
            Schema::create($this->tableName, function (Blueprint $table) {
                $table->increments('id');
                $table->string('genre', 45);
            });
        }
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