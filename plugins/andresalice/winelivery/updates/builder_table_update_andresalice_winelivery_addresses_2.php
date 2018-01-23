<?php namespace Andresalice\Winelivery\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAndresaliceWineliveryAddresses2 extends Migration
{
    public function up()
    {
        Schema::table('andresalice_winelivery_addresses', function($table)
        {
            $table->text('residencial')->nullable()->change();
            $table->text('celular')->nullable()->change();
            $table->text('proximo')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('andresalice_winelivery_addresses', function($table)
        {
            $table->text('residencial')->nullable(false)->change();
            $table->text('celular')->nullable(false)->change();
            $table->text('proximo')->nullable(false)->change();
        });
    }
}
