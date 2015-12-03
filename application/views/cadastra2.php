<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

pd ($data);
?>

		
		<div class="wrapper" role="main">
			<div class="container">
				<div class="row">
					
                                    
					<!-- Sidebar -->
					<div id="sidebar" class="col-md-3">
						
						<div class="busca">
							<h3>Busca</h3>
							<form method="GET" action=" <?php echo $this->config->base_url("SearchBrowse") ?>" >
								<div class="form-group">
									<label class="sr-only" for="exampleInputEmail2">Busca</label>
									<input type="text" class="form-control" name="palavra_buscada" id="palavra_buscada" placeholder="Buscar por palavra">
									<input type="hidden" name="tipo" value="palavra"/>
								</div>
								<button type="submit" class="btn btn-success">Buscar</button>
							</form>
						</div><br>
                                                
						<div class="categorias">
							<h2>Categorias</h2>
							<ul><?php foreach ($categorias as $categoria){ ?>
								<li><a href="<?php echo $this->config->base_url("SearchBrowse")."\?palavra_buscada=".$categoria."&tipo=categoria"?>">
                                			<?php echo $categoria?></a></li>
                    			<?php } ?>
	                        </ul>
						</div>
					
					</div>	
					<!--  FIm da Sidebar -->
					
                                        
                    <div id="conteudo" class="col-md-9">
                    	<div class="row" >
                <div id="titulo" class="col-sm-12">
                    <h3>Por favor, entre com seus dados</h3>
                </div>
                <form id="formulario" method="POST" action = "<?php echo base_url("Valida")?>" class="form-group col-sm-10 push-sm-2 formulario" role="form">
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label class="control-label col-sm-12 text-center" for="fname">First Name:</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="fname" id="fname" value="" placeholder="First Name">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label class="control-label col-sm-12 text-center" for="lname">Last Name:</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="lname" id="lname" value="" placeholder="Last Name">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label class="control-label col-sm-12 text-center" for="email">Email:</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="email" id="email" value="" placeholder="email@dominio.com">
                            </div>
                        </div>                
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label class="control-label col-sm-12 text-center" for="street">Street:</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="street" id="street" value=""  placeholder="Street">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label class="control-label col-sm-12 text-center" for="city">City:</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="city" id="city" value=""  placeholder="City">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label class="control-label col-sm-12 text-center" for="state">State:</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="state" id="state" value=""  placeholder="State">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label class="control-label col-sm-12 text-center" for="zip">Zip:</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="zip" id="zip" value=""  placeholder="Zip">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group"> 
                            <div class="col-sm-2 text-left">
                                <button type="submit" class="btn btn-success"  name="submit" value="Submit">Cadastrar</button>
                            </div>
                            <div class=" col-sm-2 text-right">
                                <button type="reset" class="btn btn-danger" onclick="location.href = 'index.php'">Voltar </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>


					</div><!-- div conteudo -->

				</div><!-- div row container -->
			</div><!-- div container -->
		</div><!-- div wrapper -->
		
		
