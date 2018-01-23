<?php namespace Andresalice\Winelivery\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAndresaliceWineliverySlideshows extends Migration
{
    public function up()
    {
        Schema::table('andresalice_winelivery_slideshows', function($table)
        {
            $table->text('url');
        });
    }
    
    public function down()
    {
        Schema::table('andresalice_winelivery_slideshows', function($table)
        {
            $table->dropColumn('url');
        });
    }
}
