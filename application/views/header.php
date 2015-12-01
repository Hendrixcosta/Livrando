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
        <script type='text/javascript' src="<?php echo base_url('assets/js/script.js'); ?>"></script>
    </head>
    <body>
    <!-- div container onde vai toda a pagina -->
    <div class="container-fluid col-sm-10 col-sm-push-1" style="background-color: lightgrey;">
        <header class="row" style="color:darkblue;background-color: lightblue;">
            <div class="row">
                <div class="col-sm-3 text-left">
                    <a href="<?php echo base_url('Home')?>">  
                    <img height="85" width="270"
                    src="<?php echo base_url('assets/imagens/livrando02.jpg')?>" class="img-rounded" alt="Imagem Não Encontrada" />
                    </a>
                </div>
                <div class="col-sm-6 text-center">
                    <h2>O melhor lugar para se comprar Livros de Informática</h2>
                </div>
                <div clas="col-sm-3 text-right">
                    <a href="<?php echo $this->config->base_url('Login/carrinho');?>/?user=new">
                    <img height="85" width="270"
                    src="<?php echo base_url('assets/imagens/carrinho02.jpg')?>" class="img-rounded" alt="Imagem Não Encontrada" />
                    </a>
                </div>
            </div>
            <!-- div de Login e Logout -->
            <div class="col-sm-10 text-right">
                <h4>
                    <?php if ($this->session->userdata('logado') === TRUE) {
                    echo "Bem vindo ". $this->session->userdata('clienteFname') ." ". $this->session->userdata('clienteLname');
                    }else{
                    echo " <a href=" . $this->config->base_url('Login') .">Cadastre-se ou faça seu login.</a>";
                    }?>
                </h4>
            </div>
            <div class="col-sm-2 text-right">
                <h4>
                    <a href="<?php echo $this->config->base_url('Logout');?>">Sair do Sistema</a>
                </h4>
            </div>
        </header>   
        <!-- div row onde vai todo o conteúdo -->
        <div class="row">