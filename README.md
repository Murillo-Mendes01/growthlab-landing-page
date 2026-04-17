# 🚀 GrowthLab - Landing Page

## 📌 Sobre o Projeto
Teste técnico para vaga de estágio Frontend/Full-Stack. Landing page responsiva da GrowthLab (estratégias digitais).

## 🎯 Funcionalidades
- Landing page responsiva
- Formulário funcional
- PHP + MySQL
- Sass + boas práticas

## 🛠️ Tecnologias
HTML5 | CSS3/Sass | JavaScript | PHP | MySQL

## 📂 Estrutura
/css/ | /js/ | /img/ | /php/ | index.php | README.md

## ⚙️ Como Executar
1. `git clone https://github.com/Murillo-Mendes01/growthlab-landing-page.git`
2. Copie para `C:\xampp\htdocs\`
3. Inicie Apache + MySQL no XAMPP
4. Acesse `http://localhost/nome-da-pasta`

## 🗄️ Banco MySQL
```sql
CREATE DATABASE formulario_projeto;
USE formulario_projeto;

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `email` varchar(110) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `descricao` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
);
```
## 🔌 Configuração do PHP

Arquivo: php/config.php
```
<?php
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'formulario_projeto';

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($conexao->connect_error) {
    die("Erro de conexão: " . $conexao->connect_error);
}
?>
```
## 📩 Funcionamento do Formulário

O formulário captura os seguintes dados:

Nome
Email
Telefone
Mensagem

Ao enviar, os dados são processados via PHP e armazenados no banco de dados MySQL.

## 🌐 Deploy

O projeto foi publicado utilizando:

InfinityFree (Hospedagem com suporte a PHP e MySQL)

GitHub (Versionamento de código)

## 🔗 Acesso ao Projeto

👉 https://growthlab01.infinityfreeapp.com/index.php

## ⚠️ Observação

Caso o formulário não funcione online por limitações do servidor gratuito, é possível testar a funcionalidade localmente seguindo os passos descritos acima.

## 📩 Contato

Desenvolvido por Murillo Mendes

-GitHub:[ https://github.com/Murillo-Mendes01](https://github.com/Murillo-Mendes01)

-Linkedin: [www.linkedin.com/in/murillo-mendes-rodrigues](https://www.linkedin.com/in/murillo-mendes-rodrigues)


