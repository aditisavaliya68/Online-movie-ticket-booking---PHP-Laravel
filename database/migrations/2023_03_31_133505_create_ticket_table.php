<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateticketTable extends Migration
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        Schema::create('ticket', function (Blueprint $table) {
            $table->id('person_id');
            $table->string('FirstName',60);
            $table->string('LastName',60);
            $table->string('Email',60);
            $table->string('Age',3);
            $table->string('Movie',60);
            $table->time('MovieTime',$precision = 0);
            $table->string('Phone',10);
            $table->text('Address',60);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('ticket');
    }
};
