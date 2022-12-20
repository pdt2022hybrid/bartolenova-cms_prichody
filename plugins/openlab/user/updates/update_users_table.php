<?php namespace Openlab\User\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::table('openlab_user_users', function (Blueprint $table) {
            $table->string('lastname')->nullable();
            $table->string('email')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('openlab_user_users');
    }
}
