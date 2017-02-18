<?php namespace Andresalice\Winelivery\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAndresaliceWineliverySectors extends Migration
{
    public function up()
    {
        Schema::create('andresalice_winelivery_sectors', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('title');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('andresalice_winelivery_sectors');
    }
}
