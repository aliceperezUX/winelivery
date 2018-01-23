<?php namespace Andresalice\Winelivery\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAndresaliceWineliverySlideshows2 extends Migration
{
    public function up()
    {
        Schema::table('andresalice_winelivery_slideshows', function($table)
        {
            $table->text('url_m');
        });
    }
    
    public function down()
    {
        Schema::table('andresalice_winelivery_slideshows', function($table)
        {
            $table->dropColumn('url_m');
        });
    }
}
