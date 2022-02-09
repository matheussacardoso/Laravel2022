<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'cnpj',
        'telefone',
        'cep',
        'endereco'
    ];

    public function address()
    {
        return $this->hasOne(Address::class);
    }
}
