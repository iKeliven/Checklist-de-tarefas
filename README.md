# Checklist-de-tarefas
Sistema de gerenciador de tarefas onde adiciona as tarefas feito com PHP e MYSQL, seleciona e separa entre tarefas a fazer e tarefas feitas.
A motivação do projeto é fazer um gerenciador de tarefas que mostre o percentual que falta para concluir o projeto, pois tenho essa dificuldade de perceber esse percentual no meu trabalho e nas minhas atividades diárias.
Não concluí ainda, mas já tenho o código iniciado, então só falta terminar.

Utilizei PHP e MySQL pois são linguagens que utilizo no meu estágio <br>

Repositório do projeto que me inspirei: 
https://github.com/PedroECB/gerenciador-de-tarefas

Regras de negócio:<br>
O sistema deve inserir tarefas a partir de um campo<br><br>
O sistema deve ser responsivo<br>
O sistema deve mostrar as tarefas a serem realizadas<br>
O sistema deve salvar as tarefas em um banco de dados<br>
O sistema deve mostrar as tarefas que já foram realizadas<br><br>


Passo a passo:<br>
Como é um projeto php, precisa de um servidor para rodar<br>
Recomendo usar o Xampp com versão do PHP 7.3.31<br>
Instalar o MYSQL também<br>

Salvar o repositório na pasta XAMPP/HTDOS<br>
Se não rodar, salvar a pasta htdocs como htdocs-backup<br>
E salvar o repositório como htdocs<br>

Instalar o banco de dados<br>
No browser, ir para localhost/phpmyadmin/<br>
clicar em new <br>
Nomear como checklist > create<br>
Ir para importar > selecionar o banco de dados que está no repositório > go<br><br>

Conexão do banco<br>
As configurações do banco estão no arquivo config.php<br>
No modal do Xampp, na linha do MySQL clique em config > my.ini<br>
Lá ele mostra a senha e o root do seu servidor<br>
Se precisar, renomeie os dados de conexão do arquivo config.php<br>

Rodar
No browser, ir para localhost/<br>
e rodar a aplicação :)<br>


