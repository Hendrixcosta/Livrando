<!-- div main onde vai todo o conteúdo central-->
<div role="main" class="container col-sm-9 col-sm-push-3">
    <div class="row text-justify">
        <h3 style="color:darkblue;"><?php echo $livros->getTitle();?></h3>
        by:<a href="http://www.google.com/search?q=<?php echo $livros->getStrFName().' '.$livros->getStrLName() ;?>">
            <?php echo $livros->getStrLName();?></a>
    </div>
    <div class="row">
        <div class="col-sm-2">
            <a href= "http://yorktown.cbe.wwu.edu/sandvig/mis314/assignments/bookstore/bookimages/<?php
             echo $livros->getISBN();?>.01.LZZZZZZZ.jpg">
            <img src="http://yorktown.cbe.wwu.edu/sandvig/mis314/assignments/bookstore/bookimages/<?php
             echo $livros->getISBN();?>.01.MZZZZZZZ.jpg" class="img-responsive" alt="Imagem Não Encontrada"/>
             </a>
        </div>
        <div class="col-sm-10">
            <div class="col-sm-9 text-left">
            <p><b>ISBN: </b><?php echo $livros->getISBN();?></p>
            <p><b>Publisher: </b><?php echo $livros->getPublisher();?></p>
            <p><b>Publisher date: </b><?php echo $livros->getPubdate();?></p>
            <p><b>Pages: </b><?php echo $livros->getPages();?></p>
            <p><b>Edition: </b><?php echo $livros->getEdition();?></p>
            <p><b>Price: </b><?php echo $livros->getPrice();?></p>
            </div>
            <div class="col">
                
            </div>
        </div>
    </div>
    <div class="row text-justify" style="padding: 0px 50px 50px 0px;">
        <h4 class="text-center">Descrição: </h4>
        <p><?php echo $livros->getDescription();?></p>
    </div>

</div>
