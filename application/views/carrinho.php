<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 
 pd($lista_isbns);
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
					
					<div id="sidebar" class="col-md-6">
					<?php echo "<h4>".$quantidade."</h4>";?>
                                     
                	<div class="row">                    
                    <div id="conteudo" class="col-md-9">
                          <table class="table table-hover  table-bordered table-striped">
                                    <thead>
                                      <tr>
                                        <th>Titulo</th>
                                        <th>Quantidade</th>
                                        <th>Preço</th>
                                        <th>Total</th>
                                        <th></th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      	<?php 	if (isset($livros)){
                                      	foreach ($livros as $livro){ ?>
                                      <tr>
                                        <td><?php echo $livro->getTitle();?></td>
                                        <td><?php echo $lista_isbns[$livro->getISBN()];?>  </td>
                                        <td><?php echo $livro->getPrice();?></td>
                                        <td>20</td>
                                        <td>
                                            
                                            	<a href="<?php echo $this->config->base_url('Cookie?acao=del&isbn=').$livro->getISBN();?>">
							                   	<img height="30" width=""
							                    src="<?php echo base_url('assets/imagens/del.png')?>" class="img-rounded" alt="Imagem Não Encontrada" />
							                    
							                    </a>
                                            
                                            
                                        </td>
                                      </tr>
                                      <?php }}else {
                                          
                                      }?>
                                    </tbody>
                                  </table>
                                </div>
                            </div>

                        </div>

                    	
                    	
                    	
                    	
                    	
                    	
                    	
                    	
                    	
                    	
                    	
                    
	
							
                     	


					</div><!-- div conteudo -->

				</div><!-- div row container -->
			</div><!-- div container -->
		</div><!-- div wrapper -->
		
		
