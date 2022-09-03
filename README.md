# Laravel2022

## Tecnologias e Bibliotecas
* Laravel
* Wamppserver: PHP 5, MySQL e Apache
* Web Service: VIACEP (https://viacep.com.br/)
* Bootstrap (https://startbootstrap.com/theme/sb-admin-2)
* Jquery

## Estudos
### MVC (MODEL, VIEW AND CONTROLLER)
* VIEW - página dos usuários
* MODEL - tabela do banco de dados (obter esses dados do banco)
* CONTROLLER - ponte entre a M  e V

<img src="https://lh6.googleusercontent.com/v61X2Hbez9ZgiIhY20DyIzCtC_XXu3h9f1FjR4CpJqxeytyOSZndcJvcYrupP7mgfQoWYyzq2P9ykMJ9FyMOv2pzAV04rPSyNdNbEx23Q4KhThReuZW0RuyKPhFdmtcN-nvpS1xU">

### Exemplo:
1. Usuário vizualiza uma VIEW
2. Faz uma requisição HTTP
3. CONTROLLER recebe a requisição
4. CONTROLLER faz o pedido pra MODEL
5. MODEL busca esses dados na tabela de usuário ou do sistema
6. Devolve os dados para o CONTROLLER
7. CONTROLLER envias os dados
8. Usuário vizualiza uma nova VIEW

Em PHP, $algumacoisa é uma variável

## Comandos Laravel
* php artisan migrate
* php artisan serve
* php artisan make:

## Rotas
Rota é o caminho por onde o usuário vai fazer a requisição.

### Tipo GET: oq é digitado na barra do navegador (recuperar dados, exibir páginas).
// quando for digitado no navegador /register
Route::get('register',[RegisterController::class,'create'])->name('auth.register.create');

### Tipo POST: utilizado para enviar dados (formulários).
Esses dados não ficam visíveis ao usuário.

// quando acessar /register, quero que acesse o método store que está dentro da classe RegisterController;

// ->name é o nome dada a rota

Route::post('register',[RegisterController::class,'store'])->name('auth.register.store');

### Exemplos
* http://127.0.0.1:8000/register
* http://127.0.0.1/
* http://localhost/phpmyadmin

## Front-End
@csrf evita requisições más-intecionadas

cria um token validando as requisições

## Back-End
para receber os dados, precisa passar um parâmetro do tipo request e retornar com os dados com o método all()

migrations é onde será versionado as tabelas
* up() quando executar a migration, ele criara as tabelas
* down() quando executar a migration, ela reverterá oq foi feito nas tabelas

jQuery é uma biblioteca de funções JavaScript

1. é preciso criar uma id pro cep

2. $(document).on('blur', '#cep', function() {
no meu docs quando perder o foco, descubra o cep
referencio o id com #

ajax é uma técnica javascript que utiliza o método XMLHttpRequest para fazer requisições assíncronas

3. success: function(data){
os dados que são retornados no webservice

4. $('#uf').val(data.uf);
varíavel id uf, preenche o campo com a data do webservice

## WEB SERVERS WITH JAVA
Think of 2 cellphones communicating with each other. One is the web server and the another one is the web browser. 

Web browser send a message (request) to the web server.

Web server send a message (response) to the web browser.

REQUEST

GET (can you get me the message/file?)

RESPONSE

HTTP/1.1 200 OK(HTTP STATUS CODES: 404 - NOT FOUND)

What is a web server in fact?

Anything that you acess on the internet (web browser) is running by a web server. So you need connect this 2 things.
