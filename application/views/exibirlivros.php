<?php

//pd ($livros);

?>

<table border="2" class="table table-condensed table-striped"  width=600 height=300>
    <?php 
    
    foreach ($livros as $livro){
    ?>
    <TR>
         <TD><img src="http://yorktown.cbe.wwu.edu/sandvig/mis314/assignments/bookstore/bookimages/<?php
         echo $livro->getISBN();
         ?>.01.THUMBZZZ.jpg"/> 
         </TD>
        <TD><?php echo $livro->getTitle() ?></TD>
    </TR>
    
    <TR>
        <td></td>
        <TD><?php 
        $descricao = limita_palavra($livro->getDescription());
        echo $descricao . "<a href=". $this->config->base_url("ProductPage") ."/?isbn=". $livro->getISBN() ."  > ... Mais </a>";
        
        ?></TD>
    </TR>
    
 
    

    <?php
    }
    ?>
</TABLE>

