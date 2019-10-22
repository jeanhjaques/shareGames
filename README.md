# shareGames
Projeto criado por alunos para trabalho na disciplina de programação para web ofertada pela FACOM - UFMS.

Requisitos basicos para a execução:
- Servidor com suporte a php;
- Ferramenta MySql

Passo a passo para a execução:
i) Usar sua ferramenta MySql e criar um database com o nome 'share';
ii) Executar o script sql disponível na pasta /sources/lib e popular o projeto;*
ii) Configurar o database com seus dados atraves do arquivo Conexao.php disponivel na pasta /sources/app/models;
iii) Iniciar a naveção no site através da view presente em /sources/app/views/homepage.php;

O que já está possível?
i) Efetuar login (De forma prematura, apenas é checado se existe o usuario e senha no database);
ii) Cadastrar um novo usuario;

*O script sql presente no projeto foi criado somente para testes, por esse motivo não nos preocupamos ainda com as restrições, tipos de atributos ou até mesmo com o tamanho dos varchars.
