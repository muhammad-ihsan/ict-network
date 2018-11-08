<?php namespace Ict\Network\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreatePortsTable extends Migration
{
    public function up()
    {
        Schema::create('ict_network_ports', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('name');
            $table->string('parameter', 32);
        });
    }

    public function down()
    {
        Schema::dropIfExists('ict_network_ports');
    }
}
