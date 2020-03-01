<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePredmetsTable extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create('predmets', function (Blueprint $table) {
      $table->increments('id');
      $table->string('kratpred', 8)->nullable();
      $table->string('nazpred', 60);
      $table->integer('siforgjed')
        ->nullable()
        ->unsigned();
      $table->integer('upisanostud')
        ->nullable()
        ->unsigned();
      $table->integer('brojsatitjedno')
        ->nullable()
        ->unsigned();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::dropIfExists('predmets');
  }

}
