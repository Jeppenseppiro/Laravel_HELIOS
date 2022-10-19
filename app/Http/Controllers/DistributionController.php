<?php

namespace App\Http\Controllers;

use App\Models\Distribution;
use App\Models\DistributionType;
use Illuminate\Http\Request;

class DistributionController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    //

  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    //
    $distributionTypes = DistributionType::get();
    return view('web.database.distribution.create')->with('distributionTypes', $distributionTypes);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    // $distributionLine = new Distribution;
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Distribution  $distribution
   * @return \Illuminate\Http\Response
   */
  public function show(Distribution $distribution)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Distribution  $distribution
   * @return \Illuminate\Http\Response
   */
  public function edit(Distribution $distribution)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Distribution  $distribution
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Distribution $distribution)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Distribution  $distribution
   * @return \Illuminate\Http\Response
   */
  public function destroy(Distribution $distribution)
  {
    //
  }

  public function types()
  {
    //
    $distributionTypes = DistributionType::get();
    return $distributionTypes->toJson();
    dd($distributionTypes);
  }
}
