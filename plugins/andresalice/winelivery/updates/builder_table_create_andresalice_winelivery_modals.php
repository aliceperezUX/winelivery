<?php namespace Andresalice\Winelivery\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAndresaliceWineliveryModals extends Migration
{
    public function up()
    {
        Schema::create('andresalice_winelivery_modals', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('title');
            $table->text('description');
            $table->integer('product_id');
            $table->text('url');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('andresalice_winelivery_modals');
    }
}
