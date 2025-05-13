<?php

namespace App\Models;

use CodeIgniter\Model;

class CuidadorModel extends Model
{
    protected $table = 'cuidador';
    protected $primaryKey = 'idcuidador';
    protected $allowedFields = [
        'nome',
        'idade',
        'endereco',
        'profissao',
        'sexo',
        'horarios',
        'contatos'
    ];

    // Habilita timestamps automáticos se necessário
    protected $useTimestamps = false;
}
