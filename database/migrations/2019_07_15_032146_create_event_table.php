<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event', function (Blueprint $table) {
            $table->Increments('event_id');
            $table->string('name');
            $table->integer('user_id')->unsigned();
            $table->string('kind_id');
            $table->string('location');
            $table->string('city_id');
            $table->string('district_id');
            $table->string('address');
            $table->text('event_info');
            $table->string('logo')->default('logodefault.jpg');
            $table->string('organizer');
            $table->text('org_info');
            $table->string('phone_org');
            $table->string('email_org');
            $table->string('url')->nullable();
            $table->dateTime('event_start');
            $table->dateTime('event_end');
            $table->boolean('status');
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
        Schema::dropIfExists('event');
    }
}
