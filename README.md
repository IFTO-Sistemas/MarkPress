<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

# Como executar o projeto

No momento temos duas formas de rodar o projeto sendo elas com o docker ou com o próprio composer instalado na sua máquina:

## Docker
- Para rodar com o docker basta estar com o docker iniciado na sua máquina e digitar o comando "docker-compose up -d --build" no terminal para executar o projeto ou executar o arquivo "Docker_Start.bat".

- Para encerrar o projeto rodando em docker basta usar o comando "docker-compose down" ou executar o arquivo "Docker_Close.bat" para encerrar os containers.

- Após rodar os containers basta acessar o seu [Localhost](Localhost) para verificar se o projeto está rodando 

## Composer

* Por segurança para executar o projeto com o Composer é feito somente por terminal para evitar falhas.

* Os comandos necessários para executar o projeto estão no arquivo Comandos.txt
* Basta seguir os comandos para que oprojeto rode.

# Como executar as migrations
## Docker
- Abrindo o CLI do container **PHP** basta digitar "php artisan migrate" e pronto as migrations serão executadas.

## Composer
- No terminal basta digitar "php artisan migrate" para as migrations serem executadas.
