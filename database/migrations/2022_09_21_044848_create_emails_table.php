<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emails', function (Blueprint $table) {
            $table->id(); 
            $table->string("app_user");
            $table->string("contact_person");
            $table->string("email_id");
            $table->string("address");
            $table->string("image_attachment");
            $table->string("city_name");
            $table->string("latitude");
            $table->string("longitude");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *      $table->app_user();
             *$table->contact_person();
             *$table->email_id();
             *$table->address();
             *$table->image_attachment();
             *$table->city_name();
             *$table->latitude();
             *$table->longitude();
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emails');
    }
};
