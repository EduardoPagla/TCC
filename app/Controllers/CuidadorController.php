<?php

namespace App\Controllers;

use App\Models\CuidadorModel;
use CodeIgniter\Controller;

class CuidadorController extends Controller
{
    public function index()
    {
        $cuidadorModel = new CuidadorModel();
        $data['cuidadores'] = $cuidadorModel->findAll();

        // Carrega uma view para exibir os cuidadores
        return view('cuidador/index', $data);
    }

    public function criar()
    {
        return view('cuidador/criar');
    }

    public function armazenar()
    {
        $cuidadorModel = new CuidadorModel();
        $cuidadorModel->save([
            'nome' => $this->request->getPost('nome'),
            'idade' => $this->request->getPost('idade'),
            'endereco' => $this->request->getPost('endereco'),
            'profissao' => $this->request->getPost('profissao'),
            'sexo' => $this->request->getPost('sexo'),
            'horarios' => $this->request->getPost('horarios'),
            'contatos' => $this->request->getPost('contatos'),
        ]);

        return redirect()->to('/cuidador');
    }

    public function editar($id)
    {
        $cuidadorModel = new CuidadorModel();
        $data['cuidador'] = $cuidadorModel->find($id);

        return view('cuidador/editar', $data);
    }

    public function atualizar($id)
    {
        $cuidadorModel = new CuidadorModel();
        $cuidadorModel->update($id, [
            'nome' => $this->request->getPost('nome'),
            'idade' => $this->request->getPost('idade'),
            'endereco' => $this->request->getPost('endereco'),
            'profissao' => $this->request->getPost('profissao'),
            'sexo' => $this->request->getPost('sexo'),
            'horarios' => $this->request->getPost('horarios'),
            'contatos' => $this->request->getPost('contatos'),
        ]);

        return redirect()->to('/cuidador');
    }

    public function excluir($id)
    {
        $cuidadorModel = new CuidadorModel();
        $cuidadorModel->delete($id);

        return redirect()->to('/cuidador');
    }
}
