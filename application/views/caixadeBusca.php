<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



?>
  <br><br><p>

    <form method="GET" class="form-inline" role="form" action=" <?php echo $this->config->base_url("SearchBrowse") ?>">
        <input type="text" name="palavra_buscada" size="40" class="form-control" >
        <input type="submit" value="Buscar">
        <input type="hidden" name="tipo" value="busca">
    </form>

    