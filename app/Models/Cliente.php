<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $fillable = ['nome_pessoa', 'numero_celular'];

    public function carros()
    {
        return $this->hasMany(Carro::class);
    }

    public function estacionamentos()
    {
        return $this->hasMany(Estacionamento::class);
    }
}
