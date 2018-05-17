<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlarmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alarms_movimento_1', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('value');
            $table->timestamps();
        });

        Schema::create('alarms_movimento_2', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('value');
            $table->timestamps();
        });

        Schema::create('alarms_flame', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('value');
            $table->timestamps();
        });

        Schema::create('alarms_gas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('value');
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
        Schema::dropIfExists('alarms_movimento_1');
        Schema::dropIfExists('alarms_movimento_2');
        Schema::dropIfExists('alarms_flame');
        Schema::dropIfExists('alarms_gas');
    }
}
