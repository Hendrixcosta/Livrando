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
					
                                    
					<
                                        
                    <div id="conteudo" class="col-md-10 col-md-offset-1">
                    	
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
                        
                        
                    </div><!-- div conteudo -->

				</div><!-- div row container -->
			</div><!-- div container -->
		</div><!-- div wrapper -->
		
		
