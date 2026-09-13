# Sistema de Biblioteca

Projetinho de laravel — sistema web para gerenciamento de biblioteca.

## Integrantes

- Eduardo Pepes Pankievicz

## Descrição

Sistema de controle de biblioteca desenvolvido em Laravel, permitindo o cadastro e gerenciamento de livros e autores. O sistema possui três níveis de acesso (administrador, bibliotecário e leitor), cada um com permissões diferentes sobre as funcionalidades.
## Tecnologias utilizadas

- Laravel 11
- PHP
- PostgreSQL (hospedado no Neon)
- Blade
- Laravel Breeze

## Funcionalidades

- Autenticação de usuários (login, registro, logout) via Laravel Breeze
- Três níveis de acesso: admin, bibliotecario e leitor
- CRUD completo de Livros (cadastrar, listar, editar, excluir)
- Relacionamento entre Autor e Livro (um autor possui vários livros)
- Middleware de proteção de rotas administrativas
- Policy para controle de exclusão de livros
- Validação de formulários via Form Requests

## Instalação

```bash
composer install
cp .env.example .env
php artisan key:generate
```

Configure as variáveis de banco de dados no arquivo `.env`:

DB_CONNECTION=pgsql
DB_HOST=seu-host-neon
DB_PORT=5432
DB_DATABASE=seu-banco
DB_USERNAME=seu-usuario
DB_PASSWORD=sua-senha


Depois, rode:

```bash
npm install
npm run build
php artisan migrate:fresh --seed
```

## Execução

```bash
php artisan serve
```

Acesse `http://localhost:8000` no navegador.

## Usuários para teste

**Administrador**
- E-mail: admin@email.com
- Senha: 12345678

**Bibliotecário**
- E-mail: bibliotecario@email.com
- Senha: 12345678

**Leitor**
- E-mail: leitor@email.com
- Senha: 12345678
