# Laravel2022

## Tecnologias
* Laravel
* Wamppserver: PHP 5, MySQL e Apache

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

### Front-End
@csrf evita requisições más-intecionadas

cria um token validando as requisições
