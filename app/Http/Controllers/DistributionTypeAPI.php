<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DistributionType;

class DistributionTypeAPI extends Controller
{
  public function getType()
  {
    //
    $distributionTypes = DistributionType::get();
    return $distributionTypes;
    // return $distributionTypes->toJson();
    // dd($distributionTypes);
  }
}
