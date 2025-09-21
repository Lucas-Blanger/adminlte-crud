# Laravel AdminLTE CRUD

Um sistema de gerenciamento administrativo completo construído com Laravel e AdminLTE, implementando operações CRUD básicas com interface moderna e responsiva.

## Características

-   Interface administrativa com AdminLTE 3
-   Operações CRUD completas (Create, Read, Update, Delete)
-   Autenticação e autorização de usuários
-   Dashboard com estatísticas
-   Design responsivo
-   Validação de formulários
-   Paginação de dados
-   Busca e filtros
-   Notificações (alerts/toasts)

## Tecnologias Utilizadas

-   **Backend:** Laravel 10.x
-   **Frontend:** AdminLTE 3, Bootstrap 4
-   **Banco de Dados:** MySQL
-   **Autenticação:** Laravel Breeze/Sanctum
-   **Icons:** Font Awesome

## Pré-requisitos

-   PHP >= 8.1
-   Composer
-   Node.js >= 16
-   MySQL >= 5.7
-   Git

## ⚙️ Instalação

1. **Clone o repositório**

```bash
git clone https://github.com/Lucas-Blanger/adminlte-crud.git
cd laravel-adminlte-crud
```

2. **Instale as dependências do PHP**

```bash
composer install
```

3. **Instale as dependências do Node.js**

```bash
npm install
```

4. **Configure o arquivo de ambiente**

```bash
cp .env.example .env
```

5. **Configure o banco de dados no arquivo `.env`**

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=seu_banco
DB_USERNAME=seu_usuario
DB_PASSWORD=sua_senha
```

6. **Gere a chave da aplicação**

```bash
php artisan key:generate
```

7. **Execute as migrações**

```bash
php artisan migrate
```

8. **Execute os seeders**

```bash
php artisan db:seed
```

9. **Compile os assets**

```bash
npm run dev
```

10. **Inicie o servidor**

```bash
php artisan serve
```

Acesse: `http://localhost:8000`

## Estrutura do Projeto

```
├── app/
│   ├── Http/Controllers/
│   │   └── Admin/           # Controllers do painel admin
│   ├── Models/              # Models Eloquent
│   └── Services/            # Lógica de negócio
├── database/
│   ├── migrations/          # Migrações do banco
│   └── seeders/            # Seeders
├── resources/
│   ├── views/
│   │   ├── admin/          # Views do AdminLTE
│   │   └── layouts/        # Layouts base
│   └── js/                 # JavaScript customizado
├── routes/
│   ├── web.php             # Rotas web
│   └── admin.php           # Rotas administrativas
```

### Gerenciamento de Usuários

-   [ X ] Listagem de usuários
-   [ X ] Cadastro de usuários
-   [ X ] Edição de perfis
-   [ X ] Controle de permissões

## Licença

Este projeto está sob a licença MIT. Veja o arquivo [LICENSE](LICENSE) para mais detalhes.

## Autor

**Lucas Blanger**
