<?php

namespace App\Models;

use App\Traits\IdAsUuidTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distribution extends Model
{
  use IdAsUuidTrait;
  use HasFactory;
}
