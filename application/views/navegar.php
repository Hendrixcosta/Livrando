<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
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
                    	<?php //foreach ($livros as $livro){ ?>
							
									<!-- div row conteudo -->
									<div class="row">
										<h3><a href="#"> <?php echo $livro->getTitle() ?></a></h3>
										
										<div class="col-md-2"><br><br>
											<a href="http://yorktown.cbe.wwu.edu/sandvig/mis314/assignments/bookstore/bookimages/<?php
                                             		echo $livro->getISBN(); ?>.01.LZZZZZZZ.jpg" title="">
												<img src="http://yorktown.cbe.wwu.edu/sandvig/mis314/assignments/bookstore/bookimages/<?php
                                             		echo $livro->getISBN(); ?>.01.MZZZZZZZ.jpg" class=" " alt="Imagem Não Encontrada"/>
											</a>
										</div>
                                        
                                        <div class="col-md-3" style="padding-left: 40px">
											<p><b><h4>Preço: </b> 	<?php echo $livro->getPrice(); ?>
											<p><b><h4>Publisher: </b> 	<?php echo $livro->getPublisher (); ?>
											<p><b><h4>Páginas: </b> 	<?php echo $livro->getPages (); ?>
											<p><b><h4>Pupdate: </b> 	<?php echo $livro->getPubdate (); ?>
										
										</div>
										
										<div class="col-md-3" style="padding-left: 40px">
											
											<a href="<?php echo $this->config->base_url('Cookie?acao=add&isbn=').$livro->getISBN();?>">
							                   	<img onclick="ola();" height="50" width=""
							                    src="<?php echo base_url('assets/imagens/add.png')?>" class="img-rounded" alt="Imagem Não Encontrada" />
							                    <p>Adicionar ao Carrinho!
							                    </a>
                    
											
										
										</div>
										
											
									
									</div>
									<div class="row">
										<div class="col-md-8"><br>
											<?php echo $livro->getDescription() ?>
										</div>
									</div>
									<!-- fim da div row conteudo -->
							
                     	<?php //} ?>


					</div><!-- div conteudo -->

				</div><!-- div row container -->
			</div><!-- div container -->
		</div><!-- div wrapper -->
		
		
