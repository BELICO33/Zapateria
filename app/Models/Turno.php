<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turno extends Model
{
    protected $primaryKey="id";
    use HasFactory;
    protected $fillable =['desc_turno'];
}
