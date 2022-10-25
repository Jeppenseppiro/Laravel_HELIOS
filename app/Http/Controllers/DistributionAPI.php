<?php

namespace App\Http\Controllers;

use App\Models\Distribution;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class DistributionAPI extends Controller
{
  //
  public function getPrimary()
  {
    // $distribution = Distribution::select('uuid', 'distribution_id', 'distribution_type', 'distribution_latitude', 'distribution_longitude', 'distribution_description');
    // return Datatables::of($distribution)
    //   ->addColumn('action', function ($distribution) {
    //     return
    //       '<a href="#" id="' . $distribution->uuid . '" class="button-info text-white p-1"><i class="fas fa-info-circle"></i></a>
    //       <a href="#" id="' . $distribution->uuid . '" class="button-danger text-white p-1"><i class="fas fa-trash"></i></a>';
    //   })
    //   ->make(true);
    $distribution = Distribution::get();
    return $distribution;
  }
}
