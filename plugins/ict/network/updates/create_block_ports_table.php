<?php namespace Ict\Network\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateBlockPortsTable extends Migration
{
    public function up()
    {
        Schema::create('ict_network_block_ports', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('block_id');
            $table->integer('port_id');
            $table->string('parameter');
        });
    }

    public function down()
    {
        Schema::dropIfExists('ict_network_block_ports');
    }
}
