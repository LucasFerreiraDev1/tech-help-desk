# Tech Help Desk

**Tech Help Desk** é um sistema web básico de abertura e consulta de chamados de suporte técnico. Usuários autenticados podem registrar problemas, classificá-los por categoria e consultar seus chamados. O sistema possui controle de sessão, níveis de permissão (usuário e administrador) e armazenamento dos chamados em arquivo. Ideal para fins didáticos e demonstrações simples de autenticação e manipulação de dados com **PHP**.

---

## 📌 Funcionalidades

- Login de usuários e administradores
- Abertura de chamados com título, categoria e descrição
- Armazenamento simples dos chamados em arquivo `.db`
- Consulta de chamados por usuário autenticado
- Controle de sessão com redirecionamento seguro
- Interface responsiva e moderna com ícones FontAwesome

---

## 📁 Estrutura de Pastas

```
/project-root
│
├── private/              # Diretório reservado para scripts sensíveis (fora de htdocs!)
│   ├── authenticate_login.php
│   └── register.bd
├── src/                      # Arquivos estáticos
│   ├── css/
│   │   └── style.css
│   ├── js/
│   │   └── script.js
│   └── svg/
│       ├── logo.svg          # Logo do sistema
│       ├── open-ticket.svg      # Ícone de abertura de chamado
│       └── consult-ticket.svg   # Ícone de consulta de chamado
│
├── php/                      # Diretório principal com páginas do sistema
│   ├── home.php              # Página inicial
│   ├── open_ticket.php       # Formulário para abrir chamados
│   ├── consult.php           # Página de consulta de chamados
│   ├── login.php             # Faz a autenticação de login
│   ├── register_call.php     # Registra o chamado no arquivo register.db
│   ├── validate_session.php  # Verifica se a sessão está ativa
│   ├── navbar.php            # Barra de navegação incluída nas páginas
│   └── logoff.php            # Finaliza a sessão do usuário
│
└── index.php                 # Página de login
```

## ⚠️ Observações

- Os chamados são salvos em `private/register.db` em formato texto (separado por `#`). Para ambientes de produção, recomenda-se o uso de banco de dados real como MySQL.
- O sistema **não possui painel administrativo completo**, mas pode ser facilmente expandido.
- Por segurança, certifique-se de proteger a pasta `private/` com `.htaccess` ou fora da pasta pública.

---

🚀 ## Como Executar

1. Clone o repositório:
```
git clone https://github.com/LuksDevs/tech_help_desk.git
``` 
2. Coloque o projeto em um ambiente com suporte a PHP (ex: XAMPP ou servidor Apache).
3. Inicie o servidor e acesse:
```
http://localhost/tech-help-desk/index.php
``` 
---

## 🧪 Tecnologias Utilizadas

- **PHP**: Backend leve para controle de sessão, login e armazenamento
- **HTML5 & CSS3**: Estrutura e estilização da interface
- **JavaScript**: Para função do botão de navgação responsiva
- **FontAwesome**: Ícones para melhorar a usabilidade visual

---

## 👤 Níveis de Acesso

- **Admin (permission_id = 1)**: visualiza todos os chamados.
- **User (permission_id = 2)**: visualiza apenas seus próprios chamados.

## 🔐 Autenticação

As credenciais estão definidas no arquivo `authenticate_login.php`. A autenticação é processada via `login.php`, que faz o `require` do script de autenticação.

## 📝 Como abrir e consultar chamados

1. O usuário deve fazer login via `index.php`.
2. Após o login:
   - Pode abrir um novo chamado em `open_ticket.php`
   - Consultar os chamados em `consult.php`
3. Os dados dos chamados são armazenados no próprio arquivo `login.php` de forma simples (cada linha representa um chamado com campos separados por `#`).

## 🚪 Logout

Através do link "sair" na barra de navegação, que aponta para `logoff.php`.

## ✅ Segurança

- Sessões são utilizadas para proteger as rotas internas (`validate_session.php`).
- A visualização dos chamados é controlada com base no `permission_id` e `user_id` armazenados na sessão.

---

## 📄 Licença

Este projeto é livre para fins de estudo e aprendizado. Sinta-se à vontade para modificar e expandir.

---

## 👨‍💻 Autor

Desenvolvido por **[LuksDevs](https://github.com/LuksDevs)** 🚀
