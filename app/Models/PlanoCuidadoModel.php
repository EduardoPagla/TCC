<?php

namespace App\Models;

use CodeIgniter\Model;

class PlanoCuidadoModel extends Model
{
    protected $table = 'plano_cuidado';
    protected $primaryKey = 'idplanocuidado';
    protected $allowedFields = [
        'tratamento_medicamentoso',
        'exercicios_mobilidade',
        'instrucoes_higiene',
        'prevencao_complicacoes',
        'acompanhamento_equipe',
        'acompanhamento_cuidador',
        'educa_cuidador',
        'contato_emergencial'
    ];

    // Desabilita timestamps automáticos
    protected $useTimestamps = false;
}
