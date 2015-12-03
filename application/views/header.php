<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!--Título da página-->
        <title><?php echo $titulo ?></title>
        
        
        <!--carregando o ajax -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!--carregando o javascript do Hendrix-->
        <script type='text/javascript' src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
        <script type='text/javascript' src="<?php echo base_url('assets/js/script.js'); ?>"></script>
        <!--carregando o bootstrap-->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
        <!--carregando o javascript do projeto-->
        <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
        <!--carregando o CSS do Hendrix-->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/estilo.css'); ?>">
        
    </head>
    <body>
    <!-- div container onde vai toda a pagina -->
    
    

    <!--primeira linha responsável só pelo cabeçalho-->
        <header class="row cabecalho">
            
            <div class="container col-sm-12 text-center">
                <div class="col-sm-3" style="padding: 0px 0px 0px 200px;" >
                    <a href="<?php echo base_url('')?>">
                    <img width="300px" src="<?php echo base_url('assets/imagens/logo.png')?>"  alt="Imagem Não Encontrada" />
                    </a>
                </div>

                <div class="col-sm-4" style="padding: 30px 0px 0px 200px;" >
                    <div class="input-group">
                        <input class="form-control"   placeholder="Buscar em todo site"  style="width: 150px">
                         <button type="button" class="btn btn-primary btn-large">Buscar </button>
                    </div>
                </div>

                <div class="col-sm-2">
                   <a class="login-btn" onclick="login();">
                       <!--  <a href=" <?php echo base_url('login')?>" >-->
                    <img width="35px" style="margin-top:30px" src="<?php echo base_url('assets/imagens/login.png')?>"  alt="Imagem Não Encontrada" />
                    </a>
                    
                    <a href="<?php echo base_url('carrinho')?>" >
                     <img width="35px" style="margin-top:30px; margin-left:30px " src="<?php echo base_url('assets/imagens/carrinho.png')?>"  alt="Imagem Não Encontrada" /></a>
                </div>
                    
            <!-- div de Login e Logout -->
            <div class="col-sm-3 text-left"  style="color:white;">
                <h4>
                    <?php if ($this->session->userdata('logado') === TRUE) {
                    echo "Bem vindo ". $this->session->userdata('clienteFname') ." ". $this->session->userdata('clienteLname');
                    }else{
                    echo " Cadastre-se ou faça seu login.";
                    }?>
                </h4>
                <h4>
                    <a href="<?php echo $this->config->base_url('Logout');?>">Sair do Sistema</a>
                </h4>
            </div>


                </div>
            </div>
        </header>   
    
    
    
    
    <!-- Vou utilliza só o centro da pagina ignorando a primeira e ultima colunas-->
    <div class="container col-sm-10 col-sm-push-1">
        
        
        <!-- div row onde vai todo o conteúdo -->
        
        <div class="row">
            
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">

                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 style="color:red;"><span class="glyphicon glyphicon-lock"></span> Login</h4>
                    </div>
                    <div class="modal-body">
                      <form  class="form-horizontal" action="<?php echo base_url("Login");?>" method="post" >
                        <div class="form-group">
                          <label for="usrname"><span class="glyphicon glyphicon-user"></span> Email</label>
                          <input type="text" class="form-control" name="email" placeholder="Email@email">
                        </div>
                        
                          <button  type="submit" class="btn btn-default btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                      <p>Não é membro?<a href=<?php echo base_url("Login");?> ><h4>Cadastre!</h4></a></p>

                    </div>
                  </div>
                </div>
              </div> 