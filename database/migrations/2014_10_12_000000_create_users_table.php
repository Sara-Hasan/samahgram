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
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone');
            $table->text('user_img')->default('images/a04d849cf591c2f980548b982f461401.jpg');
            $table->string('user_gender');
            $table->date('user_dob');
            $table->boolean('user_active_status')->default(0);
            $table->integer('user_number_of_followers')->default(0);
            $table->integer('user_number_of_following')->default(0);
            $table->text('user_bio')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('user_relationship_status')->nullable();
            $table->date('user_last_seen_date')->nullable();;
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
