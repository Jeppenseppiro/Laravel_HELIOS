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
    Schema::create('distributions', function (Blueprint $table) {
      $table->uuid('id')->primary();
      $table->timestamps();
      $table->integer('created_by');
      $table->integer('updated_by');
      $table->string('distribution_id', 25);
      $table->integer('distribution_type');
      $table->text('distribution_description');
      $table->float('distribution_latitude');
      $table->float('distribution_longitude');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('distributions');
  }
};
