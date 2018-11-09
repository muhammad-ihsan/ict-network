<?php namespace Ict\User\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('ict_user_users', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->timestamps();
            $table->boolean('is_active')->nullable()->default(1);
            $table->string('parameter', 32);
        });
    }

    public function down()
    {
        Schema::dropIfExists('ict_user_users');
    }
}
