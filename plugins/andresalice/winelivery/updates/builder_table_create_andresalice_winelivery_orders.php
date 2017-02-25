<?php namespace Andresalice\Winelivery\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAndresaliceWineliveryOrders extends Migration
{
    public function up()
    {
        Schema::create('andresalice_winelivery_orders', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('user_id');
            $table->integer('address_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('andresalice_winelivery_orders');
    }
}
