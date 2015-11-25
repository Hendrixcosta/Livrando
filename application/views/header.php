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
    <div class="container-fluid col-sm-10 col-sm-push-1">
        <header class="row" style="color:darkblue;background-color: lightblue;">
            <div class="col-sm-9">
                Aqui vai o Header da parada!!!<br />
                Pode ser colocado em um arquivo separado...<br />
            </div>
            <div clas="col-sm-3">
                <img height="150" width="150"
                src="<?php echo base_url('assets/imagens/carrinho02.jpg')?>" class="img-responsive img-thumbnail" alt="Imagem Não Encontrada" />
                <button type="button" class="btn btn-primary btn-large">Login</button>
            </div>
        </header>   
        <!-- div row onde vai todo o conteúdo -->
        <div class="row">