<?php


echo "<h1>".$titulo."</h1>";

echo $quantidade;

//pd($livros);

foreach ($livros as $livro){
    
   // pd ($livro);
    echo "<h2>". $livro->getTitle()."</h2>";
    echo "<h2>". $livro->getPrice()."</h2>";
    
}


?>


<!-- div main onde vai todo o conteúdo central-->
<div role="main" class="container col-sm-9 col-sm-push-3">
    <div class="row" style="padding: 50px 20px 5px 20px;">
        Carrinho do Felipe
    </div>
    <div class="row">
        <div class="col-sm-2">
        Carrinho do Felipe L2
        </div>
        <div class="col-sm-10" style="text-align:justify;">
        Carrinho do Felipe L2
        </div>
    </div>
</div>
