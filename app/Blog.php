<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
  protected $table ='blog';
  public $timestamp = false;//dibuat jika kolom created_at & updated_at tidak ada
}
