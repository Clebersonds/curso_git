Curso de git

Comando para configurar o nome e email no git

git config --global user.name "nome de quem esta criando"
git config --global user.email  "email"

Obs: é preciso a aspas dupla 

Comando para iniciar o projeto:

git init

O mesmo vai criar uma pasta oculta dentro do diretório de projeto;

Criar arquivo README.md na raiz da pasta do projeto, para colocar as informações do projeto;

Comando para verificar os status do projeto, mostra oque foi feito

git status

Esse comando vai mostrar arquivos que já estao sendo monitorados ou nao, os que não estão sendo, aparece como vermelho e o git da a opção de add para acionar cada um manualmente;

Comando para adicionar todos o arquivos que não estao sende monitorados

git add -A 

Comando adiciona todos o arquivos no monitoramento do git caso queira fazer em aquivo especifico, de o comando git add e nome do arquivo, o -A adiciona todos automaticamente;

Comando commit para adicionar no repositório

git commit -m 'comentario da modificação';

Comando para listar todos commits que foram realizado naquele branch

git log

Comando para listar em branch nos estamos:

git branch

Comando para voltar no commit desejado:

git reset -soft 

git reset -mixed

git reset -hard

soft - retorna no commit desejado, mas continua com o monitoramento não é preciso fazer o add novamente apaneas commit.

mexid - parecido com soft, mas é preciso realizar o add e depois o commit.

hard - volta para a configuração deseja, ele ignora os commits superiores a ele.



