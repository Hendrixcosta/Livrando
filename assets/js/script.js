




function login(){
           $("#myModal").modal('show', {keyboard: true});
    
} 




function ola (){
    alert ("ola");
}

function addisbn(isbn){
   $.ajax({
        type : 'GET',
        url : "Carrinho",
        data: {
            tipo: "produto",
            acao:"add",
            id : 3
        },
        success : function(selecionados){
                  alert (2);
                  //Status Bar nao tem produtos 
                  //document.getElementById("produtos_selecionados").innerHTML = selecionados ;
                    //alert (selecionados, id);
                  //verificarbotao(selecionados, id, "produto");

                  //document.getElementById(id).innerText ='Remover' ;
                  //alert ("this");
        },
        error : function(XMLHttpRequest, textStatus, errorThrown) 
        {alert (XMLHttpRequest.statusText);}
                 });
}