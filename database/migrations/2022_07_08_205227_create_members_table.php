<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('camp_id');
            $table->string('membership');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('gender');
            $table->string('rank');
            $table->integer('unit_id')->nullable();
            $table->integer('duty_nco')->nullable();
            $table->integer('flight_id');
            $table->boolean('band')->default(false);
            $table->boolean('form17')->default(false);
            $table->boolan('paid')->default(false);
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
        Schema::dropIfExists('members');
    }
}
