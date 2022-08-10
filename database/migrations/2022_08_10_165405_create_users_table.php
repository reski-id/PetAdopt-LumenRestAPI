<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username', 10);
            $table->string('password', 10);
            $table->string('fullname', 25);
            $table->string('email')->unique();
            $table->string('address', 50);
            $table->string('city', 25);
            $table->string('phonenumber', 15);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function pets()
    {
        return $this->hasMany(pets::class);
    }

    public function meeting()
    {
        return $this->hasMany(meeting::class);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
