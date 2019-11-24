# shareGames
Projeto criado por alunos para trabalho na disciplina de programação para web ofertada pela FACOM - UFMS.

Requisitos basicos para a execução:
- Servidor com suporte a php;
- Ferramenta MySql

Passo a passo para a execução:
i) Usar sua ferramenta MySql e criar um database com o nome 'sharegames';
ii) Executar o script sql disponível na pasta /sources/lib e popular o projeto;
ii) Configurar o database com seus dados atraves do arquivo Conexao.php disponivel na pasta /sources/app/models;
iii) Dar permissão total (777) para a pasta /sources/public/upload para que seja possivel upar as imagens dos cadastros de jogos;
iii) Iniciar a naveção no site através da view presente em /sources/app/views/login.php;

O que já está possível?
i) Efetuar login;
ii) Cadastrar usuarios;
iii) Cadastrar jogos;
iv) Solicitar Troca;
v) Visualizar jogos cadastrados na biblioteca pessoal;
vi) Visualizar jogos disponíveis para troca;
vii) Visualizar solicitações de troca;
viii) Visualizar do perfil do usuario;
