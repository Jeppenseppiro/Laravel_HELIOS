<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DistributionTypeSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('distribution_types')->insert([
      ['distribution_type' => 'NONE'],
      ['distribution_type' => 'PRIMARY'],
      ['distribution_type' => 'SECONDARY'],
      ['distribution_type' => 'TRANSFORMER'],
    ]);
    /*
          Distribution ID
          Distribution Description
          Distribution Latitude
          Distribution Longitude
        */
  }
}
