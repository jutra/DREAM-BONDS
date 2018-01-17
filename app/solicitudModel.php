<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
  protected $fillable = [
      'user_id','proyect_id'];
}
