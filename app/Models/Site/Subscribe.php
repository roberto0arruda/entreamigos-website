<?php

namespace App\Models\Site;

use Illuminate\Database\Eloquent\Model;

class Subscribe extends Model
{
    protected $fillable = [
        'nome_completo',
        'data_nascimento',
        'cep',
        'logradouro',
        'numero',
        'bairro',
        'cidade',
        'uf',
        'celular',
        'email',
        'doador',
        'tp_sang',
        'escolaridade',
        'est_civil',
        'filhos',
        'trabalha',
        'cargo',
        'blusa',
        'outro_projeto',
    ];
}
