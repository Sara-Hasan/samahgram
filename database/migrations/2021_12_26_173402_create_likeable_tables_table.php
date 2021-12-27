<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLikeableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('likeable_likes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('likeable_id', 36);
            $table->string('likeable_type', 255);
            $table->string('user_id', 36)->index();
            $table->timestamps();
            $table->unique(['likeable_id', 'likeable_type', 'user_id'], 'likeable_likes_unique');
        });

        Schema::create('likeable_like_counters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('likeable_id', 36);
            $table->string('likeable_type', 255);
            $table->unsignedBigInteger('count')->default(0);
            $table->unique(['likeable_id', 'likeable_type'], 'likeable_counts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('likeable_likes');
        Schema::dropIfExists('likeable_like_counters');

    }
}
