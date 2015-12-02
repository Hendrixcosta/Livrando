<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!--Título da página-->
        <title><?php echo $titulo ?></title>
        <!--carregando o bootstrap-->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
        <!--carregando o javascript do projeto-->
        <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
        <!--carregando o ajax -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!--carregando o javascript do Hendrix-->
        <script type='text/javascript' src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
        <script type='text/javascript' src="<?php echo base_url('assets/js/script.js'); ?>"></script>
        <!--carregando o CSS do Hendrix-->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/estilo.css'); ?>">
        
    </head>
    <body>
    <!-- div container onde vai toda a pagina -->
    
    

    <!--primeira linha responsável só pelo cabeçalho-->
        <header class="row cabecalho">
            
            <div class="container col-sm-10 col-sm-push-2">
            <a href="<?php echo base_url('')?>">
                <div class="col-sm-4" style="width: 310px">
                    
                    <img width="300px" src="<?php echo base_url('assets/imagens/logo.png')?>"  alt="Imagem Não Encontrada" />
                </div></a>

                <div class="col-sm-3 main-busca" style="margin-top: 30px">    
                    <div class="input-group">
                        <input class="form-control"   placeholder="Buscar em todo site"  style="width: 150px">
                         <button type="button" class="btn btn-primary btn-large">Buscar </button>
                    </div>
                </div>

                <div class="col-sm-3">
                    <a href=" <?php echo base_url('login')?>" >
                    <img width="35px" style="margin-top:30px" src="<?php echo base_url('assets/imagens/login.png')?>"  alt="Imagem Não Encontrada" />
                    </a>    
                    <a href="<?php echo base_url('carrinho')?>" >
                     <img width="35px" style="margin-top:30px; margin-left:30px " src="<?php echo base_url('assets/imagens/carrinho.png')?>"  alt="Imagem Não Encontrada" /></a>
                     
                </div>
            </div>
        </header>   
    
    
    
    
    <!-- Vou utilliza só o centro da pagina ignorando a primeira e ultima colunas-->
    <div class="container col-sm-10 col-sm-push-1">
        
        
        <!-- div row onde vai todo o conteúdo -->
        
        <div class="row">