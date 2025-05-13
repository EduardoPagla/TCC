<?php

namespace App\Controllers;

use App\Models\PacienteModel;
use CodeIgniter\Controller;

class PacienteController extends Controller
{
    public function index()
    {
        $pacienteModel = new PacienteModel();
        $data['pacientes'] = $pacienteModel->findAll();

        // Carrega uma view para exibir os pacientes
        return view('paciente/index', $data);
    }

    public function criar()
    {
        return view('paciente/criar');
    }

    public function armazenar()
    {
        $pacienteModel = new PacienteModel();
        $pacienteModel->save([
            'nome' => $this->request->getPost('nome'),
            'endereco' => $this->request->getPost('endereco'),
            'idade' => $this->request->getPost('idade'),
            'sexo' => $this->request->getPost('sexo'),
            'condicoes_saude' => $this->request->getPost('condicoes_saude'),
        ]);

        return redirect()->to('/paciente');
    }

    public function editar($id)
    {
        $pacienteModel = new PacienteModel();
        $data['paciente'] = $pacienteModel->find($id);

        return view('paciente/editar', $data);
    }

    public function atualizar($id)
    {
        $pacienteModel = new PacienteModel();
        $pacienteModel->update($id, [
            'nome' => $this->request->getPost('nome'),
            'endereco' => $this->request->getPost('endereco'),
            'idade' => $this->request->getPost('idade'),
            'sexo' => $this->request->getPost('sexo'),
            'condicoes_saude' => $this->request->getPost('condicoes_saude'),
        ]);

        return redirect()->to('/paciente');
    }

    public function excluir($id)
    {
        $pacienteModel = new PacienteModel();
        $pacienteModel->delete($id);

        return redirect()->to('/paciente');
    }
}
