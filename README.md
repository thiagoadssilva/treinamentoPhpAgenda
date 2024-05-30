# Projeto de Agenda de Contatos

Este projeto é uma aplicação web simples de uma agenda de contatos, desenvolvida utilizando PHP, HTML, CSS e MySQL. Para a estilização, foi utilizado o framework Bootstrap.

## Funcionalidades

- Adicionar novos contatos
- Visualizar a lista de contatos
- Editar informações de um contato
- Excluir contatos
- Pesquisar contatos

## Tecnologias Utilizadas

- **PHP**: Linguagem de programação usada no desenvolvimento do backend da aplicação.
- **HTML**: Linguagem de marcação usada para estruturar as páginas web.
- **CSS**: Linguagem de estilo usada para definir a aparência das páginas web.
- **Bootstrap**: Framework CSS utilizado para estilizar a aplicação e torná-la responsiva.
- **MySQL**: Sistema de gerenciamento de banco de dados utilizado para armazenar as informações dos contatos.

## Pré-requisitos

Antes de começar, certifique-se de ter as seguintes ferramentas instaladas em seu sistema:

- [XAMPP](https://www.apachefriends.org/index.html) ou outro servidor local PHP
- Navegador Web (Google Chrome, Mozilla Firefox, etc.)

## Configuração do Projeto

1. **Clone o repositório para o seu ambiente local**:
    ```bash
    git clone https://github.com/thiagoadssilva/treinamentoPhpAgenda.git
    ```

2. **Inicie o servidor local** (exemplo com XAMPP):
    - Abra o painel de controle do XAMPP e inicie o Apache e MySQL.

3. **Configure o banco de dados**:
    - Abra o phpMyAdmin e crie um novo banco de dados chamado `agenda_contatos`.
    - Aqui está a estrutura que foi usado nesse exemplo
        
            CREATE TABLE `contacts` (
            `id` int unsigned NOT NULL AUTO_INCREMENT,
            `name` varchar(150) DEFAULT NULL,
            `phone` varchar(20) DEFAULT NULL,
            `observations` text,
            PRIMARY KEY (`id`)
            ) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci

4. **Configuração do arquivo de conexão com o banco de dados**:
    - No diretório do projeto, localize o arquivo `config/connection.php` e ajuste as configurações de acesso ao banco de dados:
      ```php
      <?php
        $host = "localhost";    
        $dbname = "agenda";
        $user = "root";
        $pass = "root";

        try {
            $conn =  new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
            // Ativando o modo de erros na tela
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            $error = $e->getMessage();
            echo "Eroo: $error";
        }           

5. **Acesse a aplicação**:
    - No navegador, digite `http://localhost/nome-do-projeto` para acessar a agenda de contatos.

## Estrutura do Projeto

- `index.php`: Página principal que exibe a lista de contatos.
- `create.php`: Página para adicionar um novo contato.
- `edit.php`: Página para editar um contato existente.
- `delete.php`: Script para excluir um contato.
- `connection.php`: Arquivo de configuração do banco de dados.
- `agenda_contatos.sql`: Script SQL para criar o banco de dados e tabelas.
- `css/`: Diretório que contém arquivos CSS, JavaScript e imagens.

## Contribuição

Contribuições são bem-vindas! Se você tiver sugestões de melhorias, sinta-se à vontade para abrir um pull request ou relatar um problema.

## Licença

Este projeto está licenciado sob a [MIT License](LICENSE).
