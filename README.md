<p align="center"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="200"><img src="https://www.mundodocker.com.br/wp-content/uploads/2015/06/docker_facebook_share.png" width="100"></p>

# Como executar o projeto
## Estrutura do projeto:

Primeiramente tenha certeza de que o projeto esteja na mesma pasta onde o laradock está:<br>
```
├── Pasta raiz
│   ├── laradock
│   ├── public
│   │   └── MarkPress
```

## Configuração do NGINX:
Dentro da Pasta "laradock" busque o arquivo "app.conf.example" na pasta do NGINX:
```
├── laradock
│   ├── nginx
│   │   ├── logrotate
│   │   ├── sites
│   │   │   └── app.conf.example
│   │   ├── ssl
```
Crie uma copia dele e renomeie para "markpres.conf" e altere a linha 13:
```
De
--» root /var/www/app;
Para
--» root /var/www/MarkPress/public;
```
## Comandos para preparar o sistema:
Execute o laradock e abra o CLI workspace no docker<br>
Navegue para a pasta do MarkPress com e execute os seguintes comandos para instalar as dependências do projeto e as dependências de NPM:<br>
```
--» composer install
--» npm install
```
Tendo as dependências instaladas crie uma cópia do arquivo .env com o comando:<br>
```
--» cp .env.example .env
```
E Gere uma chave de criptografia de aplicativo e faça o migrate no banco de dados:
```
--» php artisan key:generate
--» php artisan migrate
```

## Preparar Voyager
Execute para rodar corretamente o voyager na máquina:<br>
```
--» artisan db:seed --class=VoyagerDatabaseSeeder
--» php artisan hook:setup
--» php artisan storage:link
--» composer dump-autoload
```

Adicione no arquivo de rota do laravel "routes/web.php".
```
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
```
Por fim crie um usuário para entrar no Voyager.
```
php artisan voyager:admin seuemail@email.com --create
```
Documentação do Voyager: https://voyager-docs.devdojo.com/
## OBS:
* Caso o comando "php artisan migrate" apresente erro abra no navegador o endereço [localhost:8081](http://localhost:8081) faça o login com o acesso:
```
Servidor: mysql
Usuário: root
Senha: root
```
* E crie uma base de dados com o nome "markpres" e com o Agrupamento (Collation) "utf8mb4_unicode_ci" e execute o comando "php artisan migrate" novamente.<br>

## Executando o projeto:
Finalizando com os comandos para executar os serviços do VUE.js
```
--» npm run dev
OU
--» npm run watch
```
