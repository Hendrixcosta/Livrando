<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



       echo "<b>Browse </b>" ;
    
       foreach ($categorias as $categoria){
            echo "<br><a href=\"".$this->config->base_url("SearchBrowse")."\?palavra_buscada=".$categoria."&tipo=navegacao\" >"
             .$categoria."</a>";       
            
       }
        


             
             
            
    ?>