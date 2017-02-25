<?php namespace Andresalice\Winelivery\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAndresaliceWineliverySlideshows extends Migration
{
    public function up()
    {
        Schema::create('andresalice_winelivery_slideshows', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('caption');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('andresalice_winelivery_slideshows');
    }
}
