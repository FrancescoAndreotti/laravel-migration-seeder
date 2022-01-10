<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTripsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('trips', function (Blueprint $table) {
      $table->id();
      $table->timestamps();
      $table->string("destinazione", 100);
      $table->text("descrizione");
      $table->integer("prezzo");
      $table->string("luogo_partenza", 100);
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('trips');
  }
}
