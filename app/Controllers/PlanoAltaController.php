<?php

namespace App\Controllers;

use App\Models\PlanoAltaModel;
use CodeIgniter\Controller;

class PlanoAltaController extends Controller
{
    public function index()
    {
        $planoAltaModel = new PlanoAltaModel();
        $data['planos_alta'] = $planoAltaModel->findAll();

        // Carrega uma view para exibir os planos de alta
        return view('plano_alta/index', $data);
    }

    public function criar()
    {
        return view('plano_alta/criar');
    }

    public function armazenar()
    {
        $planoAltaModel = new PlanoAltaModel();
        $planoAltaModel->save([
            'data_inicio' => $this->request->getPost('data_inicio'),
            'data_final' => $this->request->getPost('data_final'),
            'cuidados_familiares' => $this->request->getPost('cuidados_familiares'),
            'atividades_lazer' => $this->request->getPost('atividades_lazer'),
            'atividade_ergonomica' => $this->request->getPost('atividade_ergonomica'),
            'apoio_psicologico' => $this->request->getPost('apoio_psicologico'),
            'alimentacao' => $this->request->getPost('alimentacao'),
            'medicacao' => $this->request->getPost('medicacao'),
            'auto_cuidado' => $this->request->getPost('auto_cuidado'),
        ]);

        return redirect()->to('/plano_alta');
    }

    public function editar($id)
    {
        $planoAltaModel = new PlanoAltaModel();
        $data['plano_alta'] = $planoAltaModel->find($id);

        return view('plano_alta/editar', $data);
    }

    public function atualizar($id)
    {
        $planoAltaModel = new PlanoAltaModel();
        $planoAltaModel->update($id, [
            'data_inicio' => $this->request->getPost('data_inicio'),
            'data_final' => $this->request->getPost('data_final'),
            'cuidados_familiares' => $this->request->getPost('cuidados_familiares'),
            'atividades_lazer' => $this->request->getPost('atividades_lazer'),
            'atividade_ergonomica' => $this->request->getPost('atividade_ergonomica'),
            'apoio_psicologico' => $this->request->getPost('apoio_psicologico'),
            'alimentacao' => $this->request->getPost('alimentacao'),
            'medicacao' => $this->request->getPost('medicacao'),
            'auto_cuidado' => $this->request->getPost('auto_cuidado'),
        ]);

        return redirect()->to('/plano_alta');
    }

    public function excluir($id)
    {
        $planoAltaModel = new PlanoAltaModel();
        $planoAltaModel->delete($id);

        return redirect()->to('/plano_alta');
    }
}
