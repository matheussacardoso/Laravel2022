# Laravel2022

## Tecnologias e Bibliotecas
* Laravel
* Wamppserver: PHP 5, MySQL e Apache
* Web Service: VIACEP (https://viacep.com.br/)
* Bootstrap (https://startbootstrap.com/theme/sb-admin-2)
* Jquery

## Estudos
### MVC (MODEL, VIEW AND CONTROLLER)
* V - página dos usuários
* M - tabela do banco de dados (obter esses dados do banco)
* C - ponte entre a M  e V

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
