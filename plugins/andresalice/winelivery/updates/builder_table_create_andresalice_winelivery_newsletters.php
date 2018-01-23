<?php namespace Andresalice\Winelivery\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAndresaliceWineliveryNewsletters extends Migration
{
    public function up()
    {
        Schema::create('andresalice_winelivery_newsletters', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('email');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('andresalice_winelivery_newsletters');
    }
}
