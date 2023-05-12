# -escola-api


Este é o projeto escola api. Temos 3 serviços que se comunicam entre si: Autenticação, biblioteca e escola. Veja o que contém cada um:

**Autenticação**
* CRUD de usuários
* login/out

**Biblioteca**
* CRUD de usuários e livros
* empréstimo de livros

**Escola**
* CRUD de alunos, professores e turmas

### Qual a  finalidade desse projeto?
Desenvolver um program que permita a realização dessas ações pelos clientes. Que os usuáros façam e recebam requisições HTTP.

### Como foi desenvolvido?
Usando o framework Laravel.
<https://laravel.com/docs/10.x/readme>

### Como executar?
Basta rodar o seguinte comando:
~~~php
php artisan serve --port=9000
~~~
você pode utilizar a porta que quiser.

obs: utilize o comando abaixo para baixar a pasta vendor
~~~php
composer update
~~~
