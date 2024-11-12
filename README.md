# Projeto de API Simples de Login com Laravel 🚀

Este projeto é uma API desenvolvida para um sistema simples de login, com um retorno didático e base para futuras funcionalidades. A API foi construída em Laravel e permite a criação de cadastros, validação de logins e logouts, além de oferecer acesso a rotas protegidas por autorização via token Bearer.

## Tecnologias e Ferramentas Utilizadas 🛠️

- PHP
- MySQL
- Laravel
- Git
- Visual Studio Code
- Postman
- MySQL Workbench
- XAMPP (ou Apache)

## Anotações Importantes ⚠️

Antes de iniciar, certifique-se de ter todas as tecnologias e ferramentas instaladas.

## Instalação

1. Clone o repositório:
   ```bash
   git clone https://github.com/seu-usuario/repositorio.git
   ```

2. Acesse o diretório do projeto (recomendado que esteja no servidor local, como o XAMPP):
   ```bash
   cd repositorio
   ```

3. Instale ou atualize as dependências do Laravel:
   ```bash
   composer install
   # ou
   composer update
   ```

4. Atualize as informações do arquivo `.env`:
   ```plaintext
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=nome_do_banco
   DB_USERNAME=root
   DB_PASSWORD=sua_senha
   ```

5. Gere a chave de aplicativo:
   ```bash
   php artisan key:generate
   ```

6. Crie a estrutura do banco de dados:
   ```bash
   php artisan migrate
   ```

7. Execute o servidor de desenvolvimento:
   ```bash
   php artisan serve
   ```

## Funcionamento, Rotas e Métodos 📌

> **Observação**: Este projeto não possui uma interface gráfica. Todas as interações devem ser feitas diretamente no Postman. Adicione os seguintes cabeçalhos para todas as requisições:

- `Accept`: `application/json`
- `Content-Type`: `application/json`

### Rotas e Exemplos de Uso 🚦

#### Cadastro de Usuário

- **URL**: `http://127.0.0.1:8000/api/usuarios/cadastrar`
- **Método**: `POST`
- **Body** (JSON):
  ```json
  {
    "nome": "Elton Ruan",
    "email": "eltonruan@example.com",
    "senha": "123456",
    "senha_confirmation": "123456"
  }
  ```
- **Exemplo de Resposta**:
  ```json
  {
    "usuario": {
        "nome": "Elton Ruan",
        "email": "eltonruan@example.com",
        "updated_at": "2024-11-08T14:53:13.000000Z",
        "created_at": "2024-11-08T14:53:13.000000Z",
        "id": 1
    },
    "token": "1|xamzmD3OKP2qv9MaYbCkANCIMtlSBvZw7iMd72mm65ee8629"
  }
  ```

#### Login de Usuário 🔑

- **URL**: `http://127.0.0.1:8000/api/usuarios/login`
- **Método**: `POST`
- **Headers**: `Authorization: Bearer [token_gerado]`
- **Body** (JSON):
  ```json
  {
    "email": "eltonruan@example.com",
    "senha": "123456"
  }
  ```
- **Exemplo de Resposta**:
  ```json
  {
    "token": "4|oMEgkuqUUoZWoECNZYAhEXqMc8T42zK24OcVSx3Dce4217e3",
    "message": "Usuário autenticado com sucesso!"
  }
  ```

#### Logout de Usuário 🚪

- **URL**: `http://127.0.0.1:8000/api/usuarios/logout`
- **Método**: `POST`
- **Headers**: `Authorization: Bearer [token_gerado]`
- **Exemplo de Resposta**:
  ```json
  {
    "message": "Logout bem-sucedido"
  }
  ```

#### Rota Protegida 🔒

- **URL**: `http://127.0.0.1:8000/api/protected-resource`
- **Método**: `GET`
- **Headers**: `Authorization: Bearer [token_gerado]`
- **Exemplo de Resposta**:
  ```json
  {
    "message": "Esta é uma rota protegida",
    "user": {
        "id": 1,
        "nome": "Elton Ruan",
        "email": "eltonruan@example.com",
        "created_at": "2024-11-08T14:53:13.000000Z",
        "updated_at": "2024-11-08T16:47:16.000000Z"
    }
  }
  ```

## Considerações Finais

Fico contente de poder proporcionar esse projeto aqui, e espero poder ajudar aqueles que também estão nessa jornada. Espero que gostem! Qualquer dúvida, estarei ansioso para responder! 😊
