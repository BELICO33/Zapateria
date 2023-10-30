<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Talla extends Model
{
    protected $primaryKey="id";
    protected $fillable =['talla'];
    use HasFactory;
}
