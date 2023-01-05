<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo base_url('icons/logo.jpeg'); ?>" type="image/x-icon">
    <!-- Bootstrap-->
     <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">-->
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">-->
    <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.css'); ?>">
    
    <!--CSS-->
    <link rel="stylesheet" href="<?php echo base_url('css/style.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/header.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/footer.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/inscricao.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/noticias.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/parceiros.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/contactos.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/unidades.css'); ?>">

    <title>CINFOTEC</title>
</head>
<body>
<nav class="navbar navbar-expand-lg fixed-top">

  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="<?php echo base_url('imagens/logo.jpeg'); ?>" alt="Logo" class="logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo site_url('index') ?>">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Cursos</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?php echo site_url('index/cursos') ?>">Eletricidade e Mecatrónica</a></li>
            <li><a class="dropdown-item" href="#">Tecnologia de Comunicação e Comunicação</a></li>
            <li><a class="dropdown-item" href="#">Mecânica e Produção</a></li>
            <li><a class="dropdown-item" href="#">Metrologia</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('index/unidades') ?>">Unidade</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('index/noticia') ?>">Notícias</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Sobre</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?php echo site_url('index/parceiros') ?>">Parceiros</a></li>
            <li><a class="dropdown-item" href="<?php echo site_url('index/contactos') ?>">contactos</a></li>
          </ul>
        </li>
       
      </ul>
        <a class="btn btn-outline-warning" type="submit" href="<?php echo site_url('index/inscricao') ?>">Inscreva-se</a>
    </div>
  </div>
</nav>

