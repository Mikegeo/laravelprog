<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
  public $timestamps = true;
  protected $table = 'order';
  protected $guarded = ['id'];

}
