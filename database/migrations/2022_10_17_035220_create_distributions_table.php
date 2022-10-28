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
      $table->id();
      $table->uuid('uuid');
      $table->timestamps();
      $table->integer('created_by');
      $table->integer('updated_by')->nullable();
      $table->string('distribution_id', 25);
      $table->integer('distribution_type');
      $table->text('distribution_description')->nullable();
      $table->decimal('distribution_latitude', 15, 8);
      $table->decimal('distribution_longitude', 15, 8);
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
