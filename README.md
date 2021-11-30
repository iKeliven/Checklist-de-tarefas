# Checklist-de-tarefas
Sistema de gerenciador de tarefas onde adiciona as tarefas feito com PHP e MYSQL, seleciona e separa entre tarefas a fazer e tarefas feitas.
A motivação do projeto é fazer um gerenciador de tarefas que mostre o percentual que falta para concluir o projeto, pois tenho essa dificuldade de perceber esse percentual no meu trabalho e nas minhas atividades diárias.
Não concluí ainda, mas já tenho o código iniciado, então só falta terminar.

Utilizei PHP e MySQL pois são linguagens que utilizo no meu estágio

Repositório do projeto que me inspirei: 
https://github.com/PedroECB/gerenciador-de-tarefas

Regras de negócio:
O sistema deve inserir tarefas a partir de um campo
O sistema deve ser responsivo
O sistema deve mostrar as tarefas a serem realizadas
O sistema deve salvar as tarefas em um banco de dados
O sistema deve mostrar as tarefas que já foram realizadas


Passo a passo:
Como é um projeto php, precisa de um servidor para rodar
Recomendo usar o Xampp com versão do PHP 7.3.31
Instalar o MYSQL também

Salvar o repositório na pasta XAMPP/HTDOS
Se não rodar, salvar a pasta htdocs como htdocs-backup
E salvar o repositório como htdocs

Instalar o banco de dados
No browser, ir para localhost/phpmyadmin/
clicar em new 
Nomear como checklist > create
Ir para importar > selecionar o banco de dados que está no repositório > go

Conexão do banco
As configurações do banco estão no arquivo config.php
No modal do Xampp, na linha do MySQL clique em config > my.ini
Lá ele mostra a senha e o root do seu servidor
Se precisar, renomeie os dados de conexão do arquivo config.php

Rodar
No browser, ir para localhost/
e rodar a aplicação :)


