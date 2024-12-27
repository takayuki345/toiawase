<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained()->cascadeOnDelete();
            $table->string('first_name', 255);
            $table->string('last_name', 255);
            // $table->tinyInteger('gender');
            // $table->foreignId('gender')->references('id')->on('genders');
            // $table->tinyInteger('gender');
            // $table->foreign('gender')->reference('id')->on('genders')->cascadeOnDelete();
            // $table->foreign('gender')->reference('id')->on('genders');
            // $table->foreignId('gender')->references('id')->on('genders')->cascadeOnDelete();
            $table->foreignId('gender_id')->constrained()->cascadeOnDelete();
            $table->string('email', 255);
            $table->string('tel', 255);
            $table->string('address', 255);
            $table->string('building', 255)->nullable();
            $table->text('detail');
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
        Schema::dropIfExists('contacts');
    }
}
