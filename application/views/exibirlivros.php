<!-- div main onde vai todo o conteúdo central-->
<div role="main" class="container col-sm-9 col-sm-push-3">
    <?php foreach ($livros as $livro){ ?>
    <div class="row" style="padding: 50px 20px 5px 20px;">
        <a href= "<?php echo $this->config->base_url("ProductPage") ."/?title=". $livro->getTitle()?>">
        <?php echo $livro->getTitle() ?>
        </a>
    </div>
    <div class="row">
        <div class="col-sm-2">
            <img src="http://yorktown.cbe.wwu.edu/sandvig/mis314/assignments/bookstore/bookimages/<?php
            echo $livro->getISBN(); ?>.01.THUMBZZZ.jpg" class="img-responsive img-thumbnail" alt="Imagem Não Encontrada"/>
        </div>
        <div class="col-sm-10" style="text-align:justify;">
            <?php $descricao = limita_palavra($livro->getDescription());
            echo $descricao . "<a href=". $this->config->base_url("ProductPage") ."/?isbn=". $livro->getISBN() ."  > ... Mais </a>"; ?>
         </div>
    </div>
    <?php } ?>

</div>
