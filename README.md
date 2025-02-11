Projeto-Web-Servidor

Prof. Diego Roberto Antunes

## Instalação
Para a instalação do nosso aplicativo, será necessario seguir os seguintes passos:

**Obter o Código**: Clone ou baixe o repositório do código-fonte do aplicativo para o seu computador.

**Configurar servidor local**: Inicie o Apache no painel de controle do XAMPP. No seu navegador, acesse o endereço http://localhost/nome_do_projeto, substituindo "nome_do_projeto" pelo nome da pasta onde o código foi copiado(pelos testes dos alunos, é ideal colocar a pasta que tiver o projeto na pasta do XAMPP, 'htdocs').

**Configurar o Projeto**: No terminal, instale as dependências do projeto usando o comando:"composer install" para instalação do composer e "composer global require laravel/installer" para instalação do laravel; crie o arquivo .env, podendo se basear no .env-example ("cp .env.example .env"), e por fim gerar a chave de aplicação com o comando: "php artisan key:generate".

**Configurar Banco de Dados**: No phpMyAdmin crie um banco de dados para o projeto, após isso configure as credenciais do banco no arquivo .env, depois use o comando "php artisan migrate --seed" para realizar as migrações e gerar as tabelas no banco de dados.

**Configurar o Laravel Sanctum**: Use o comando "php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"" no terminal para configura-lo.


## Configuração
PHP 8.2
Laravel 10.x
Aplicativo em versão beta, rodando no servidor local usando XAMPP

## Teste
Para testar, use "php artisan serve" para iniciar o servidor local, após isso use algum cliente HTTP (foi usado Postman) para testar os metodos get set delete e put.


## Equipe e créditos
Luis Victor Barretto - Parte de listagem.
*luisvictorbarretto@hotmail.com*


Luiz Gustavo Cardoso - Parte de login e home.
*luizrod.cardoso@gmail.com*

Felipe Thomazini - Parte de cadastro.
*felipeothomazini@gmail.com*
