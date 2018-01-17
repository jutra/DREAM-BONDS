<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;

class Proyect extends Model
{
  use SoftDeletes;

  protected $fillable = [
      'creator_id','name','description','objetive','needs',
  ];
  protected $table = 'proyects';

  protected $dates = ['deleted_at'];
}
