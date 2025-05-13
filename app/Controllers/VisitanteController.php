<?php

namespace App\Controllers;

use App\Models\VisitanteModel;
use CodeIgniter\Controller;

class VisitanteController extends Controller
{
    public function index()
    {
        $visitanteModel = new VisitanteModel();
        $data['visitantes'] = $visitanteModel->findAll();

        // Carrega uma view para exibir os visitantes
        return view('visitante/index', $data);
    }

    public function criar()
    {
        return view('visitante/criar');
    }

    public function armazenar()
    {
        $visitanteModel = new VisitanteModel();
        $visitanteModel->save([
            'nome' => $this->request->getPost('nome'),
            'contato' => $this->request->getPost('contato'),
            'especialidade' => $this->request->getPost('especialidade'),
            'horarios' => $this->request->getPost('horarios'),
            'sexo' => $this->request->getPost('sexo'),
        ]);

        return redirect()->to('/visitante');
    }

    public function editar($id)
    {
        $visitanteModel = new VisitanteModel();
        $data['visitante'] = $visitanteModel->find($id);

        return view('visitante/editar', $data);
    }

    public function atualizar($id)
    {
        $visitanteModel = new VisitanteModel();
        $visitanteModel->update($id, [
            'nome' => $this->request->getPost('nome'),
            'contato' => $this->request->getPost('contato'),
            'especialidade' => $this->request->getPost('especialidade'),
            'horarios' => $this->request->getPost('horarios'),
            'sexo' => $this->request->getPost('sexo'),
        ]);

        return redirect()->to('/visitante');
    }

    public function excluir($id)
    {
        $visitanteModel = new VisitanteModel();
        $visitanteModel->delete($id);

        return redirect()->to('/visitante');
    }
}
