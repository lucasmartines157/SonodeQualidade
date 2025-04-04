<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistrarUsuario extends Model
{
    use HasFactory;

    protected $table = 'user_sleep_data'; // Nome da tabela no banco de dados

    protected $fillable = ['nome', 'idade', 'historico_sono', 'qualidade_sono'];
}
