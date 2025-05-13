<?php

namespace App\Models;

use CodeIgniter\Model;

class PacienteModel extends Model
{
    protected $table = 'paciente';
    protected $primaryKey = 'idpaciente';
    protected $allowedFields = [
        'nome',
        'endereco',
        'idade',
        'sexo',
        'condicoes_saude'
    ];

    // Desabilita timestamps automáticos
    protected $useTimestamps = false;
}
