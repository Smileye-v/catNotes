<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccessToken extends Model
{
  // table name
  protected $table = "access_tokens";

  // blacklist
  protected $guarded = [];

  // cancel automatic timestamps
  public $timestamps = false;
}
