# API
PROJETO DE API COM PHP NATIVO E COMPOSER INTGEGRADO COM O GITHUB, USANDO VSCODE

# MINHAS EXTENSÕES VSCODE
- Peacok
- Remote-SSH
- WSL
- Composer
- Database Client
- Markdow All in One
- REST Client
- CodeSnap

### A CLASSE `stdClass`
stdClass é uma classe interna do PHP que representa um objeto genérico vazio. Quando você converte um array para um objeto, ou decodifica uma string JSON para um objeto, o PHP usa stdClass como a classe padrão. É útil quando você precisa de um objeto simples sem criar uma nova classe.

### TESTE DAS REQUISIÇÕES UTILIZANDO `THUNDER CLIENT` E `REST CLIENT` FORAM BEM SUCEDIDOS.
Lembre-se que o Thunder Client possui interface parecida com o Insomnia, enquanto
o REST Client precisa de um arquivo de script com a extensão `.http`.

### DOCUMENTAÇÃO DA MANUPULAÇÃO DE JSON COM PHP

### CRIANDO UM SCRIPT PARA O PROHETO `api`.
   
    $ sudo nano api.sh
    $ sudo chmod +x api.sh
    $ ./api.sh
    
### DENTRO DO ARQUIVO `api.sh` DESCREVA O CONTEÚDO DO SCRIPT`
    #!/bin/bash

    echo -----------------------------------------------------------------------------------------
    echo Mostra o diretório atual com o comando pwd.
    pwd
    echo -----------------------------------------------------------------------------------------
    echo Lista o conteúdo no diretório com o comando ls -l.
    ls -l
    echo -----------------------------------------------------------------------------------------
    echo Navega até o diretório /var/www e mostra seu conteúdo.
    cd /var/www
    ls -l
    echo -----------------------------------------------------------------------------------------
    echo Navega até api dentro de /var/www e lista seu conteúdo.
    cd /var/www/api
    ls -l
    echo -----------------------------------------------------------------------------------------
    echo Com o comando code . abre o projeto api no VS Code.
    code .

