# Projeto CRUD em PHP

Este projeto é um **CRUD (Create, Read, Update, Delete)** desenvolvido em **PHP puro**, sem utilização de MVC no momento, com foco no aprendizado e na prática dos fundamentos do desenvolvimento web back-end.

Atualmente, o projeto utiliza **Bootstrap** para estilização das telas e **MySQL** para o gerenciamento do banco de dados. Existe a intenção futura de migrar o front-end para **Tailwind CSS**, conforme a evolução do projeto.

---

## 🚀 Tecnologias Utilizadas

- **PHP** (sem framework e sem padrão MVC por enquanto)
- **MySQL** para banco de dados
- **Bootstrap** para estilização das páginas
- **HTML5**
- **CSS3**
- **JavaScript** (quando necessário)

---

## 📌 Objetivo do Projeto

O objetivo principal deste projeto é:

- Praticar PHP no back-end
- Entender o funcionamento de um CRUD completo
- Trabalhar com conexão e manipulação de dados no MySQL
- Estruturar melhor o código para, futuramente, migrar para um padrão mais organizado (MVC)
- Evoluir o front-end com a possível migração do Bootstrap para o Tailwind CSS

---

## 🧩 Funcionalidades

O sistema permite:

- Criar registros no banco de dados
- Listar registros
- Editar registros existentes
- Excluir registros
- Conectar e interagir com o banco de dados MySQL

---

## 🗃️ Banco de Dados

O banco de dados é gerenciado com **MySQL** e contém tabelas responsáveis por armazenar as informações utilizadas no CRUD.

Exemplo de tabela utilizada no projeto:

- `usuarios`
  - id
  - nome
  - email
  - data_nascimento
  - senha

---

## 🔧 Estrutura Atual do Projeto

No momento, o projeto **não segue o padrão MVC**.  
Os arquivos PHP lidam diretamente com:

- Lógica de negócio
- Conexão com o banco de dados
- Renderização das páginas

Essa abordagem está sendo usada propositalmente para melhor compreensão do fluxo completo da aplicação antes da adoção de uma arquitetura mais avançada.

---

## 🔮 Melhorias Futuras

- Refatoração do projeto para o padrão **MVC**
- Migração do **Bootstrap para Tailwind CSS**
- Melhor organização dos arquivos
- Implementação de validações mais robustas
- Melhoria na segurança (hash de senhas, validação de inputs, etc.)

---

## ▶️ Como Executar o Projeto

1. Instale um servidor local (XAMPP, WAMP ou Laragon)
2. Clone este repositório
3. Coloque o projeto na pasta `htdocs` (ou equivalente)
4. Configure o banco de dados MySQL
5. Ajuste as credenciais de conexão com o banco
6. Acesse o projeto pelo navegador

---

## 📚 Observações

Este projeto tem caráter **educacional** e está em constante evolução conforme o aprendizado e a prática com PHP e desenvolvimento web.

---
