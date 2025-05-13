<?php

namespace App\Models;

use CodeIgniter\Model;

class PlanoAltaModel extends Model
{
    protected $table = 'plano_alta';
    protected $primaryKey = 'idplanocuidado';
    protected $allowedFields = [
        'data_inicio',
        'data_final',
        'cuidados_familiares',
        'atividades_lazer',
        'atividade_ergonomica',
        'apoio_psicologico',
        'alimentacao',
        'medicacao',
        'auto_cuidado'
    ];

    // Desabilita timestamps automáticos
    protected $useTimestamps = false;
}
