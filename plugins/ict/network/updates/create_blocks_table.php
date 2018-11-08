<?php namespace Ict\Network\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateBlocksTable extends Migration
{
    public function up()
    {
        Schema::create('ict_network_blocks', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('location_id')->nullable();
            $table->integer('status_id')->nullable();
            $table->string('computer')->nullable();
            $table->string('switch')->nullable();
            $table->string('name')->nullable();
            $table->string('reason')->nullable();
            $table->datetime('started_at');
            $table->timestamps();
            $table->string('parameter', 32);
        });
    }

    public function down()
    {
        Schema::dropIfExists('ict_network_blocks');
    }
}
