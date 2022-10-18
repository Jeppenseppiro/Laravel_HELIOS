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
      ['distribution_type' => 'Primary'],
      ['distribution_type' => 'Secondary'],
      ['distribution_type' => 'Transformer'],
    ]);
    /*
          Distribution ID
          Distribution Description
          Distribution Latitude
          Distribution Longitude
        */
  }
}
