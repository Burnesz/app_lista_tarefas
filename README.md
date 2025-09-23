# App Lista Tarefas

Este é um aplicativo web simples para gerenciamento de listas de tarefas, desenvolvido para praticar e aprimorar habilidades em PHP, MySQL e tecnologias front-end.

## Visão Geral

O "App Lista Tarefas" permite aos usuários criar, visualizar, editar, marcar como concluídas e excluir tarefas. A aplicação organiza as tarefas em "pendentes" e "todas as tarefas", oferecendo uma interface clara e funcional para o gerenciamento de atividades diárias.

## Funcionalidades

-   **Adicionar Tarefas**: Crie novas tarefas através de um formulário simples.
-   **Listar Tarefas**: Visualize todas as tarefas cadastradas ou filtre para ver apenas as pendentes.
-   **Editar Tarefas**: Atualize a descrição de tarefas existentes.
-   **Marcar como Concluída**: Mude o status de uma tarefa de "pendente" para "realizado".
-   **Excluir Tarefas**: Remova tarefas da lista.
-   **Interface Responsiva**: Layout adaptável para diferentes tamanhos de tela.

## Tecnologias Utilizadas

-   **Back-end**: PHP
-   **Banco de Dados**: MySQL
-   **Front-end**:
    -   HTML5
    -   CSS3
    -   JavaScript
    -   Bootstrap 5.3.3
    -   Font Awesome 5.3.1

## Estrutura do Projeto

/
├── app_lista_tarefas/         # Lógica principal da aplicação (back-end)
│   ├── conexaoBD.php
│   ├── tarefa.model.php
│   ├── tarefa.service.php
│   └── tarefa_controller.php
├── htdocs/                    # Pasta pública (front-end)
│   └── app_lista_tarefas_public/
│       ├── css/
│       │   └── estilo.css
│       ├── img/
│       │   └── logo.png
│       ├── index.php             # Página de tarefas pendentes
│       ├── nova_tarefa.php       # Página para adicionar nova tarefa
│       ├── todas_tarefas.php     # Página com todas as tarefas
│       └── tarefa_controller.php # Roteador para o controller principal
└── banco_de_dados.sql         # Script de criação do banco de dados

## Como Executar o Projeto

1.  **Servidor Web**: Certifique-se de ter um ambiente de servidor local como XAMPP, WAMP ou MAMP instalado e em execução.
2.  **Banco de Dados**:
    -   Crie um novo banco de dados no seu MySQL com o nome `lista_tarefas`.
    -   Importe o arquivo `banco_de_dados.sql` para criar as tabelas e inserir os dados iniciais.
3.  **Configuração da Conexão**:
    -   Abra o arquivo `app_lista_tarefas/conexaoBD.php`.
    -   Altere as variáveis `$host`, `$dbname`, `$user` e `$pass` de acordo com as configurações do seu banco de dados.
4.  **Arquivos do Projeto**:
    -   Mova a pasta `htdocs` para o diretório raiz do seu servidor web (geralmente `htdocs` ou `www`).
    -   Mova a pasta `app_lista_tarefas` para um local fora do diretório raiz do servidor para maior segurança (por exemplo, na pasta principal do XAMPP).
5.  **Acesso**: Abra seu navegador e acesse `http://localhost/app_lista_tarefas_public/`.

## Autor

-   **Rubens Pereira**
