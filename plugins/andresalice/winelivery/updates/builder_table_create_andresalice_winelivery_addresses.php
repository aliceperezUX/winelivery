<?php namespace Andresalice\Winelivery\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAndresaliceWineliveryAddresses extends Migration
{
    public function up()
    {
        Schema::create('andresalice_winelivery_addresses', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('sector');
            $table->text('calle');
            $table->text('residencial');
            $table->text('numero');
            $table->text('telefono');
            $table->text('celular');
            $table->text('proximo');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('andresalice_winelivery_addresses');
    }
}
