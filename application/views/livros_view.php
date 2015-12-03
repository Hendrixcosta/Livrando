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
                    	<?php 
                    	if ($livros !== null){
                    		
                    	foreach ($livros as $livro){ ?>
								<div class="artigo" role="article">
									<!-- div row conteudo -->
									<div class="row">
										
										<div class="col-md-1"><br><br>
											<a href="<?php echo $this->config->base_url("Navegar") ."/?isbn=". $livro->getISBN(); ?> " title="">
												<img src="http://yorktown.cbe.wwu.edu/sandvig/mis314/assignments/bookstore/bookimages/<?php
                                             		echo $livro->getISBN(); ?>.01.THUMBZZZ.jpg" class=" " alt="Imagem Não Encontrada"/>
											</a>
										</div>
                                        
                                        <div class="col-md-8" style="padding-left: 40px">
											<h3><a href="<?php echo $this->config->base_url("Navegar") ."/?isbn=". $livro->getISBN(); ?>"> <?php echo $livro->getTitle() ?></a></h3>
											<p><?php 
													$descricao = limita_palavra($livro->getDescription());
                                                    echo $descricao . "<a href=". $this->config->base_url("Navegar") ."/?isbn=". $livro->getISBN() ."  > ... Mais </a>"; ?></p>
										</div>
									
									</div>
									<!-- fim da div row conteudo -->
								</div>
                     	<?php }
                     	} else{
                     		echo "Nenhum livro encontrado!";
                     	} ?>


					</div><!-- div conteudo -->

				</div><!-- div row container -->
			</div><!-- div container -->
		</div><!-- div wrapper -->
		
		
