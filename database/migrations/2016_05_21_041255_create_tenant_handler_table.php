<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTenantHandlerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenant_handler', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tenant_id');
            $table->string('full_name');
            $table->string('mobile_1');
            $table->string('mobile_2');
            $table->string('username');
            $table->string('password');
            $table->boolean('is_super_admin');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tenant_handler');
    }
}
