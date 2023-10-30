<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Puesto extends Model
{
    protected $primaryKey="id";
    protected $fillable =['desc_puesto', 'salario'];
    use HasFactory;
}
