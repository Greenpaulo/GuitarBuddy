<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSongsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('songs', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->integer('user_id');
      $table->string('title');
      $table->string('artist');
      $table->string('tab_url');
      $table->string('video_url');
      $table->boolean('song_learnt');
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
    Schema::dropIfExists('songs');
  }
}
