<?php namespace Andresalice\Winelivery\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAndresaliceWineliveryReviews extends Migration
{
    public function up()
    {
        Schema::table('andresalice_winelivery_reviews', function($table)
        {
            $table->text('comment');
            $table->integer('stars');
        });
    }
    
    public function down()
    {
        Schema::table('andresalice_winelivery_reviews', function($table)
        {
            $table->dropColumn('comment');
            $table->dropColumn('stars');
        });
    }
}
