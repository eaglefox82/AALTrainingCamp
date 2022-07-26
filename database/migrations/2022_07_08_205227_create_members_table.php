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
            $table->string('band')->default('N');
            $table->string('single_day')->default('N');
            $table->string('form17')->default('N');
            $table->string('paid')->default('N');
            $table->string('coy')->default('N');
            $table->string('checked_in')->default('N');
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
