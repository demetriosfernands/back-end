# Teste pratico desenvolvedor junior/pleno

### 1 - Instalando as dependencias

1.1 - Instale o php versão 8 no seu computador (é necessário ser versão 8 ou superior)

1.2 - Acesse o arquivo php.ini da sua instalação php e descomente essas linhas

    extension=openssl
    extension=fileinfo
    extension=curl
    extension_dir = "ext"
    extension=pdo_mysql

1.3 Execute o comando abaixo na raiz do projeto
```bash
composer install
```

1.4 - Crie um banco de dados chamado "laravel" dentro do mysql
      (caso você tem mudado a senha do usuário padrão é preciso
       acessar o arquivo .env do projeto e alterar os dados de conexão)

1.5 - Execute o comando abaixo apontado para a raiz do projeto para que a tabela seja criada
```bash
php artisan migrate
```

### 2 - Rodando o projeto
Execute o comando abaixo na raíz do projeto
```bash
php artisan serve
```
