<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{

    use HasFactory;
    protected $primaryKey="id";
    protected $fillable=["nombre_modelo","desc_calzado","precio","imagen","id_genero","id_color","id_tallas","id_marcas"];

    public function getGenero(){
        return $this->hasOne(Genero::class, "id", "id_genero");
    }
    public function getColor(){
        return $this->hasOne(Color::class, "id", "id_color");
    }
    public function getTalla(){
        return $this->hasOne(Talla::class, "id", "id_tallas");
    }
    public function getMarca(){
        return $this->hasOne(Marca::class, "id", "id_marcas");
    }


}
