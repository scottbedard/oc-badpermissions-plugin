<?php namespace Bedard\BadPermissions\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreatePostsTable extends Migration
{

    public function up()
    {
        Schema::create('bedard_badpermissions_posts', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bedard_badpermissions_posts');
    }

}
