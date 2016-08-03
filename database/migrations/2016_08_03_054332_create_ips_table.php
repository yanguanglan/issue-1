<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ips', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ip1');
            $table->string('ip2');
            $table->string('ip3');
            $table->string('ip4');
            $table->string('ip5');
            $table->string('ip6');
            $table->string('ip7');
            $table->string('ip8');//fenlei
            $table->string('ip9');
            $table->unique(['ip2', 'ip3', 'ip9']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ips');
    }
}
