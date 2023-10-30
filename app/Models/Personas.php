<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personas extends Model
{
    use HasFactory;
   protected $primaryKey="id";

   protected $fillable = ['nombre_p', 'ap_p', 'am_p'];
}
