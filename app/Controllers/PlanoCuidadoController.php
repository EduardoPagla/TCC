<?php

namespace App\Controllers;

use App\Models\PlanoCuidadoModel;
use CodeIgniter\Controller;

class PlanoCuidadoController extends Controller
{
    public function index()
    {
        $planoCuidadoModel = new PlanoCuidadoModel();
        $data['planos_cuidado'] = $planoCuidadoModel->findAll();

        // Carrega uma view para exibir os planos de cuidado
        return view('plano_cuidado/index', $data);
    }

    public function criar()
    {
        return view('plano_cuidado/criar');
    }

    public function armazenar()
    {
        $planoCuidadoModel = new PlanoCuidadoModel();
        $planoCuidadoModel->save([
            'tratamento_medicamentoso' => $this->request->getPost('tratamento_medicamentoso'),
            'exercicios_mobilidade' => $this->request->getPost('exercicios_mobilidade'),
            'instrucoes_higiene' => $this->request->getPost('instrucoes_higiene'),
            'prevencao_complicacoes' => $this->request->getPost('prevencao_complicacoes'),
            'acompanhamento_equipe' => $this->request->getPost('acompanhamento_equipe'),
            'acompanhamento_cuidador' => $this->request->getPost('acompanhamento_cuidador'),
            'educa_cuidador' => $this->request->getPost('educa_cuidador'),
            'contato_emergencial' => $this->request->getPost('contato_emergencial'),
        ]);

        return redirect()->to('/plano_cuidado');
    }

    public function editar($id)
    {
        $planoCuidadoModel = new PlanoCuidadoModel();
        $data['plano_cuidado'] = $planoCuidadoModel->find($id);

        return view('plano_cuidado/editar', $data);
    }

    public function atualizar($id)
    {
        $planoCuidadoModel = new PlanoCuidadoModel();
        $planoCuidadoModel->update($id, [
            'tratamento_medicamentoso' => $this->request->getPost('tratamento_medicamentoso'),
            'exercicios_mobilidade' => $this->request->getPost('exercicios_mobilidade'),
            'instrucoes_higiene' => $this->request->getPost('instrucoes_higiene'),
            'prevencao_complicacoes' => $this->request->getPost('prevencao_complicacoes'),
            'acompanhamento_equipe' => $this->request->getPost('acompanhamento_equipe'),
            'acompanhamento_cuidador' => $this->request->getPost('acompanhamento_cuidador'),
            'educa_cuidador' => $this->request->getPost('educa_cuidador'),
            'contato_emergencial' => $this->request->getPost('contato_emergencial'),
        ]);

        return redirect()->to('/plano_cuidado');
    }

    public function excluir($id)
    {
        $planoCuidadoModel = new PlanoCuidadoModel();
        $planoCuidadoModel->delete($id);

        return redirect()->to('/plano_cuidado');
    }
}
