<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
pd($data);
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
                    	
                        <div class="alert alert-success">
                        <?php
                        
                            if (isset($data['mensagem'])){
                                echo $mensagem;
                            }
                        
                        ?>
                        </div>

					</div><!-- div conteudo -->

				</div><!-- div row container -->
			</div><!-- div container -->
		</div><!-- div wrapper -->
		
		
