<?php

namespace App\Models;

use CodeIgniter\Model;

class VisitanteModel extends Model
{
    protected $table = 'enfermeiro/visitante';
    protected $primaryKey = 'idvisitante';
    protected $allowedFields = [
        'nome',
        'contato',
        'especialidade',
        'horarios',
        'sexo'
    ];

    // Desabilita timestamps automáticos
    protected $useTimestamps = false;
}
