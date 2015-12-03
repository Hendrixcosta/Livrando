http://com222-hendrixcosta.c9.io




Trabalho Final -- Venda de livros on-line

Neste trabalho você deverá implementar uma aplicação para venda de livros on-line idêntica a Geek Books.

A base de dados usada na aplicação está disponível em DatabaseDump.txt. Este script irá criar as seguintes tabelas no banco de dados:


A seguir, é descrita a funcionalidade de cada página PHP necessária para prover o funcionamento da aplicação.

index.php -- A home page deve conter um cabeçalho (header) contendo o nome da loja (invente um, a sua escolha), um logo (crie um), um ícone para representar o carrinho de compras e outro ícone para representar a conta do usuário. Recomenda-se não utilizar mais de 150px no header para sobrar um bom espaço para o resto da aplicação. O corpo da página deve conter uma caixa para realizar buscas, um menu de navegação (browse) e deve mostrar 3 ou 4 livros escolhidos de maneira randômica da base de dados. A página deve conter também um rodapé (footer), o qual deve conter links que você julgar relevantes. Pode-se colocar um link para a homepage dos autores, se houver. Recomenda-se também criar um linke com os dizeres "Sobre este site", o qual dá informações técnicas sobre o site. Espera-se que o grupo use um bom design, fazendo com que a aplicação desenvolvida fique parecida com sites de e-commerce, tais como Submarino, Americanas, Walmart, PontoFrio, etc.

DatabaseConnection.php -- Todas as páginas da aplicação necessitam de informação contida no banco de dados. Considerando que as informações de conexão podem mudar (localização, nome da base de dados, senhas, etc.), é desejável manter as informações de conexão num único local. Assim, o arquivo DatabaseConnection.php deve conter essas informações e ser incluído nas páginas através do comando include_once do PHP.

Imagens -- As imagens contendo a capa dos livros estão disponíveis em 3 tamanhos. Para referenciar uma imagem, deve-se concatenar o número ISBN do livro na URL, seguindo o padrão abaixo:

www.baldochi.unifei.edu.br/COM222/trabfinal/imagens/XXX.01.THUMBZZZ.jpg

onde XXX é o número ISBN do livro. A imagem deve servir como hiperligação para obter detalhes do livro. Clicar na imagem de thumbnail leva ao detalhamento do livro, que apresenta uma imagem da capa de tamanho médio. Clicar na imagem de tamanho médio leva à apresentação da imagem da capa em tamanho grande. O padrão a ser seguido para acesso aos 3 diferentes tamanhos de cada capa é o seguinte:

Tamanho	Extensão	Página
thumbnail	01.THUMBZZZ.jpg	index e páginas de busca e navegação
médio	01.MZZZZZZZ.jpg	Detalhamento do livro
grande	01.LZZZZZZZ.jpg	Detalhamento da capa
Descrição dos livros -- Cada livro conta com um texto descritivo que pode ser bem longo. Assim, tanto na página default (index) quanto nas páginas de busca e navegação, as quais exibem livros, deve-se mostrar apenas parte do texto, com a opção do link "Mais" que leva para a página de detalhamento, que contém todo o texto. Sugere-se usar a função substr(string, start, length) para obter uma parte do texto. Entretanto, esta função pode cortar uma palavra pela metade, então deve-se aprimorar a função para que isso não ocorra.

Caixa de busca -- Tanto a caixa de busca quanto o menu de navegação devem chamar uma página chamada SearchBrowse.php. O tipo de operação que o usuário desejar deverá ser passado como parâmetro. Os parâmetros possíveis são "search" para busca e "browse" para navegação. A página SearchBrowse.php deve utilizar esse parâmetro para selectionar o código SQL apropriado para atender a requisição.

Menu de navegação -- O menu de navegação deve ser gerado dinamicamente, mostrando apenas as categorias de livros existentes no banco de dados. Para obter esse resultado, deve-se usar uma query SQL contendo um join entre as tabelas bookcategories e bookcategoriesbooks em CategoryID. É necessário também usar a palavra chave "distinct" para eliminar categorias duplicadas, e "sort by" para ordenar as palavras chave em ordem alfabética. Os hiperlinks no menu de navegação devem apontar para SearchBrowse.php e passar a categoria selecionada pelo usuário para a função.

Dica para a melhoria: Tendo desenvolvido a home page, coloque os elementos que se deseja usar em outras páginas e os coloque em "include files". Isso deve ser feito, ao menos, com o cabeçalho e o rodapé da página, já que essas partes deverão aparecer nas demais páginas da aplicação. É desejável utilizar templates para eliminar códiog HTML e CSS duplicado. Tome cuidado para não duplicar código. Use sempre "include files".

ProductPage.php -- Essa página mostra os detalhes de um livro, tais como título, autor, ISBN, preço e a descrição completa da obra. Trata-se de uma página bastante similar a index.php, a qual pode servir de template para sua construção.

Uso de imagens -- Utilize a imagem de tamanho médio na página de descrição de um livro. Essa imagem deverá conter um link que leva à imagem de tamanho grande

SearchBrowse.php -- Esta página é responsável por apresentar os resultados de procedimentos de busca e de navegação executados pelo usuário. Em função da similaridade, a página index.php pode servir de template na construção de SearchBrowse. Sugere-se codificar primeiro o procedimento de navegação, por ser mais simples. Uma vez que a função de navegação esteja funcionando de forma apropriada, modifique a página para realizar também a parte de consulta.

ShoppingCart.php -- A página do carrinho de compras usa um cookie para armazenar os números ISBN dos livros que estão no carrinho. Para facilitar a implementação, utilize o código fornecido de um carrinho de compras básico. Este código manipula a informação contida no cookie, mas precisa ser modificado para listar o nome dos livros e calcular o valor dos custos da compra. Para tanto, os seguintes passos são necessários:

Obter o título e o preço dos livros do banco de dados utilizando uma query ajustada dinamicamente dentro de um laço foreach, o qual deve incluir o ISBN de cada livro contido no carrinho.
Para calcular o frete, utilize um procedimento simples no qual o frete do primeiro livro custa R$10 e o frete dos demais livros de um pedido custam R$5.
checkout01.php -- Essa página informa o número de itens que existem no carrinho de compras e solicita o email do comprador. O email deve ser validado utilizando a função de validação de email disponível em ValidationUtilities.php.

checkout02.php -- Essa página consulta a base de dados utilizando o endereço de email obtido em checkout01.php. Se o email for encontrado, a página popula text boxes contendo a informação do cliente. Caso contrário, os dados do cliente devem ser obtidos e cadastrados na base. Os passos necessários para a execução dessa tarefa são:

Crie uma nova tabela no banco para armazenar os dados dos clientes. Utilize o nome bookcustomers, e crie a tabela da seguinte maneira:
Campo	Tipo	Null	Extra
custID	int(11)	No	auto_increment, primary key
fname	varchar(20)	No	
lname	varchar(20)	No	
email	varchar(50)	No	
street	varchar(25)	No	
city	varchar(30)	No	
state	varchar(2)	No	
zip	varchar(9)	No	
Insira os dados de alguns cliente fictícios para testar seu código.
O texto da página muda de acordo com o resultado da consulta na base. Para clientes já cadastrados, deve-se dar a mensagem: "Benvindo de volta -- Por favor, confirme seu endereço de entrega". Para novos clientes, a mensagem deve ser: "Benvido ao nosso site -- Por favor, forneça um endereço para entrega".
Use o mesmo formulário HTML para exibir e coletar informação.
Para implementar a parte final do trabalho é necessário criar duas tabelas para guardar informação sobre os pedidos. Cada pedido pode conter vários livros (relacionamento um para muitos), então é necessário criar uma tabela para armazenar informação sobre o pedido e outra para armazenar informações sobre os itens do pedido. Seguem os dados para criação das tabelas:

bookorders	bookorderitems
orderID (int, primary key, autonumber)	orderID (primary key, int)
custID (int(6))	ISBN (primary key, varchar(11)
orderdate (int(11))	qty (int(4))
price (double(6,2))
checkout03.php -- Esta página deve processar o pedido na seguinte ordem:

Validar os dados do usuário obtidos em checkout02.php. Cada campo deve conter algum texto. Além disso, o formato do email deve ser validado com a função disponível em em ValidationUtilities.php. Se os testes de validação falharem, o usuário deve ser notificado e poder corrigir o erro.
Escrever ou atualizar as informações de entrega na base de dados. Passos:
Determinar se o cliente é novo ou já cadastrado verificando se o mesmo tem um customer ID. Acrescente um campo de formulário escondido no checkout02.php contendo custID para clientes já cadastrados. Para clientes novos, o campo deve ser deixado em branco.
Deve-se usar um SQL INSERT para novos clientes e um SQL UPDATE para clientes já cadastrados. Verifique o comprimento de custID passado por checkout02.php para determinar se vai usar um INSERT ou um UPDATE. Clientes já cadastrados têm um custID e clientes novos não.
Apenas para novos clientes: depois de criar um novo registro na tabela bookcustomers, você deve recuperar o custID que foi gerado como um campo autonumber. Atribua o valor de custID a uma variável local.
Tendo salvo as informações do cliente, é possível agora salvar as informações do pedido no banco.
Salvar o pedido do cliente. Passos:
Recuperar a informação do pedido contida no cookie e copiá-la num array ($bookArray).
Limpar o carrinho de compras deletando o cookie. Faça isso ajustando seu tempo de expiração para data passada. Exemplo: setcookie($cookieName, null, time()-60000);