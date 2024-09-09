Como executar o app:

para instalar as dependencias do projeto.
entre no diretorio do app usando o cmd e digite os codigos:

composer install 
nmp install

adicione as credencias do seu banco de dados mysql no arquivo .env.
para gerar as tabelas necesarias no banco de dados execute o codigo:

php artisan migrate

para rodar o app execute o codigo:

php artisan serve