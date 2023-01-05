<?php

class candidatosModel extends CI_Model{
   public function _construct(){
    $this->load->database();
   }
   public function cadatro($nome_Candidato, $telefone_Candidato){
        return $this->db->insert("candidato", ["nome"=> $nome_Candidato, "telefone"=>$telefone_Candidato]);
   }

}


?>