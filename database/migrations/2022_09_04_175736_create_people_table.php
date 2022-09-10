<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->increments('id'); 
            $table->string('name',150);
            $table->string('email',150);
            $table->string('city',150);
            $table->date('birth_date');
            $table->integer('salary')->unsigned();
            $table->string('gender',150);
            $table->boolean('active_status')->default(false);
            $table->string('hobby',150);
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
        Schema::dropIfExists('people');
    }
}
