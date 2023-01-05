<?php

class CandidatosController extends CI_Controller{

    public function _construct(){
        parent::_construct();
        $this->load->model("candidatosModel");
        $this->load->helper(array('form', 'url'));
    }
    public function cadastrar(){
        $nome_Candidato = $this->input->post("nome");
        $telefone_Candidato = $this->input->post("telefone");

        $resultado = $this->candidatosModel->cadatro($nome_Candidato, $telefone_Candidato);

        if ($resultado) {
            $this->index();
        } else {
            redirect("pagnas/inscricao");
        }
        
    }
    
}
?>