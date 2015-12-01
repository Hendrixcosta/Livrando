<!-- div main onde vai todo o conteúdo central-->
<div role="main" class="container col-sm-9 col-sm-push-3">
    <!-- div que contém o login com o email-->
    
    <div class="col-sm-6" style="padding: 50px 50px 50px 50px;">
        <p style="color:white;background-color: darkblue;text-align:center;">Faça seu Login</p>
        <form method="POST" action=" <?php echo $this->config->base_url("Login") ?>" class="form-group" role="form" >
            <div class="form-group">
                <div class="row text-center">
                    <label class="control-label col-sm-12 text-center" for="email">Email:</label>
                    <div class="col-sm-10 col-sm-push-1 text-center">
                    <input type="text" class="form-control" name="email" id="email" placeholder="Digite seu email">
                    </div>
                </div>
            </div>
            <div class="row text-centered"> 
                <div class="col-sm-6 col-sm-push-3 text-center">
                    <button type="submit" class="btn btn-success"  name="submit" value="login">Login</button>
                </div>
            </div>
        </form>
    </div>
    <!-- div que contém o botao para cadastro-->
    <div class="col-sm-6" style="padding: 50px 50px 50px 50px;">
        <p style="color:white;background-color: darkblue;text-align:center;">Cadastre-se</p>
        <form method="POST" action=" <?php echo $this->config->base_url("Login") ?>" class="form-group" role="form" >
            <div class="form-group">
                <div class="row text-center">
                    <label class="control-label col-sm-12 text-center" for="email">Novo por aqui? Cadastre-se!</label>
                </div>
            </div>
            <div class="row text-centered"> 
                <div class="col-sm-6 col-sm-push-3 text-center">
                    <button type="submit" class="btn btn-success"  name="submit" value="cadastrar">Cadastre-se</button>
                </div>
            </div>
        </form>
    </div>
</div>
