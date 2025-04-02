# PPI

## Qual o objetivo da atividade?

O objetivo da atividade é desenvolver um sistema de inventário para o jogo The Legend of Zelda: Tears of the Kingdom, utilizando três páginas principais: login, inventário e cadastro de itens. O sistema deve permitir ao usuário cadastrar, visualizar e gerenciar itens dentro do jogo, bem como realizar login para acessar suas informações.

![zelda login](https://github.com/user-attachments/assets/f66454c4-a2e3-4cb6-86c0-9954cc60c58d)
![image](https://github.com/user-attachments/assets/ad65e6e6-7daa-4103-b9c1-0b3e46b231f0)



## O que é um inventário de um jogo?

O inventário de um jogo é um sistema onde o jogador pode armazenar e gerenciar os itens coletados durante sua jornada. No contexto de The Legend of Zelda: Tears of the Kingdom, os itens podem incluir armas, escudos, poções e outros objetos que são essenciais para o progresso no jogo. O inventário geralmente permite visualizar, equipar ou descartar itens, e também pode ter um sistema de organização (como categorias de itens ou quantidade).

## Inventário do projeto

![iventario](https://github.com/user-attachments/assets/408c768b-6d3f-4b32-8f96-ec25dc58dfe1)

## Cadastro de Itens

![add item](https://github.com/user-attachments/assets/acbc7419-e10d-46fc-ab95-511124bafa8b)



# Quais sistemas utilizam a funcionalidade?

Vários tipos de sistemas e jogos utilizam inventários. Isso inclui:

Jogos de RPG (Role-Playing Games), como The Legend of Zelda, Final Fantasy e Skyrim.

Jogos de sobrevivência, como Minecraft ou Rust.

Jogos de ação e aventura que precisam controlar itens coletados ou comprados ao longo da jornada.

Aplicativos de gerenciamento de recursos, como plataformas de e-commerce ou gerenciamento de inventários de produtos.

# Por que uma funcionalidade é importante?

O inventário é uma funcionalidade essencial porque permite ao jogador ou usuário gerenciar os recursos que ele encontra ou coleta durante o jogo. Ele contribui para a experiência de imersão e progresso, pois os itens no inventário podem ser essenciais para completar missões, enfrentar desafios e melhorar o desempenho no jogo. Além disso, um bom sistema de inventário melhora a organização e facilita a jogabilidade.

# A Implementação
## Front-End
### Quais ferramentas/frameworks foram utilizados? Por que?

Para a parte de front-end, utilizaremos as seguintes ferramentas:

HTML: Para criar a estrutura básica da página, como a organização de formulários de login, inventário e cadastro de itens.

CSS: Para estilizar as páginas e garantir que o layout seja visualmente agradável e fácil de usar. Utilizaremos um design simples, com uma disposição de colunas e linhas para organizar os elementos da página.

## Como o layout foi feito? (linhas x colunas)

O layout foi feito de maneira simples e intuitiva, sem o uso de framework.

## Página de Login:

Utilizamos um formulário centralizado na tela com campos para o nome de usuário e senha.

O layout tem uma única coluna com elementos centralizados vertical e horizontalmente.

## Página de Inventário:

A estrutura é organizada em um grid de várias colunas com linhas

## Página de Cadastro de Itens:

Formulário simples com campos para nome do item, quantidade e imagem(arma, poção, etc.).

Layout em uma única coluna com o formulário centralizado.

## Back-End
### Quais ferramentas/linguagens/frameworks foram utilizados?

PHP: Para as funcionalidades lógicas do sistema, como autenticação de login, cadastro de itens e interação com o banco de dados.

Frameworks como BootStrap não foi utilizado.

# Código PHP
## O que o código faz? (Explicar principais funcionalidades)

O código PHP tem as seguintes funcionalidades principais:

## Página de Login:

O código PHP valida o nome de usuário e senha fornecidos pelo usuário.

Verifica se os dados estão corretos no banco de dados.

Se o login for bem-sucedido, o usuário é redirecionado para a página de inventário.

## Página de Inventário:

Recupera os itens do banco de dados e os exibe na página de inventário.

Permite ao usuário visualizar os detalhes de um item quando ele for selecionado.

Cadastro de Itens:

Permite ao administrador ou usuário (com permissão) adicionar novos itens ao banco de dados.

O formulário permite o preenchimento dos campos necessários, e o PHP processa os dados para inseri-los no banco.

# Qual o passo a passo para executar o sistema?

## Configuração do ambiente:

Instalar o servidor Apache, PHP e MySQL (XAMPP).

## Configuração dos arquivos PHP:

Programar as funcionalidades de login, cadastro e visualização de itens utilizando PHP.

## Executar o sistema:

Ativar o XAMPP Control Center;

Dar o "Start" no Apache e no MySQL;

Em um navegador, digite:
localhost/MatheusINFO3/login.php

# Códigos PHP

## Login

![php-login](https://github.com/user-attachments/assets/c1a3e07d-e790-409c-b68a-165203567608)

## Inventário

![php-inventario1](https://github.com/user-attachments/assets/e3a17da8-a894-41d3-9513-79ce5eb3a425)

## Cadastrar itens

![php-cadastro](https://github.com/user-attachments/assets/cd0ec5d1-73a1-44bb-bece-89391597993d)


Autor: Matheus Gonçalves
Turma: INFO3
