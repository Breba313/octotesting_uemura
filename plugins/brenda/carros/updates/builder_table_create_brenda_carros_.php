<?php namespace Brenda\Carros\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBrendaCarros extends Migration
{
    public function up()
    {
        Schema::create('brenda_carros_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('marca', 255);
            $table->string('modelo', 255);
            $table->smallInteger('anno');
            $table->boolean('esta_disponible')->default(1);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('brenda_carros_');
    }
}
