<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $primaryKey="id";
    protected $fillable =['desc_marca'];
    use HasFactory;
}
