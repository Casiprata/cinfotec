<?php

class index extends CI_Controller {

    public function index() {
        $this->load->view( 'componentes/cabecalho' );
        $this->load->view( 'index' );
        $this->load->view( 'componentes/rodape' );
    }

    public function cursos() {
        $this->load->view( 'componentes/cabecalho' );
        $this->load->view( 'pagnas/cursos' );
        $this->load->view( 'componentes/rodape' );
    }

    public function unidades() {
        $this->load->view( 'componentes/cabecalho' );
        $this->load->view( 'pagnas/unidades' );
        $this->load->view( 'componentes/rodape' );
    }

    public function noticia() {
        $this->load->view( 'componentes/cabecalho' );
        $this->load->view( 'pagnas/noticias' );
        $this->load->view( 'componentes/rodape' );
    }

    public function contactos() {
        $this->load->view( 'componentes/cabecalho' );
        $this->load->view( 'pagnas/contactos' );
        $this->load->view( 'componentes/rodape' );
    }

    public function parceiros() {
        $this->load->view( 'componentes/cabecalho' );
        $this->load->view( 'pagnas/parceiros' );
        $this->load->view( 'componentes/rodape' );
    }

    public function inscricao() {
        $this->load->view( 'componentes/cabecalho' );
        $this->load->view( 'pagnas/inscricao' );
        $this->load->view( 'componentes/rodape' );
    }
}