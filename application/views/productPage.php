<?php

//pd ($livros);

?>

<table border="2" class="table table-condensed table-striped"  width=600 height=300>
   
    <TR>
         <TD><img src="http://yorktown.cbe.wwu.edu/sandvig/mis314/assignments/bookstore/bookimages/<?php
         echo $livros->getISBN();
         ?>.01.MZZZZZZZ.jpg"/> 
         </TD>
        <TD><?php echo $livros->getTitle() ?></TD>
    </TR>
    
    <tr>
        <TD>ISBN:</TD>
        <TD><?php echo $livros->getISBN() ?></TD>
        
    </tr>
    
    <tr>
        <TD>Preço:</TD>
        <TD><?php echo $livros->getPrice() ?></TD>
        
    </tr>
    
    <tr>
        <TD>Publisher:</TD>
        <TD><?php echo $livros->getPublisher()  ?></TD>
        
    </tr>
    
    <tr>
        <TD>Pupdate:</TD>
        <TD><?php echo $livros->getPubdate()  ?></TD>
        
    </tr>
    
 
    

   
</TABLE>

