<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    protected $primaryKey="id";
    protected $fillable =['desc_generos'];
    use HasFactory;
}
