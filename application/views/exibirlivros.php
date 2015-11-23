<?php

//pd ($livros);

?>

<table border="1" class="table table-condensed table-striped">
    <?php 
    
    foreach ($livros as $livro){
    ?>
    <TR>
         <TD>Imagem</TD>
        <TD><?php echo $livro->getTitle() ?></TD>
    </TR>
    
    <TR>
        <td></td>
        <TD><?php 
        $descricao = limita_palavra($livro->getDescription());
        echo $descricao . "<a href=''> Mais... </a>";
        
        ?></TD>
    </TR>
    
 
    

    <?php
    }
    ?>
</TABLE>