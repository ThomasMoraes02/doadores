###################
Doadores
###################

Sistema de CRUD para Doadores utilizando PHP + Mysql

*******************
MVC
*******************

O projeto foi desenvolvido no padrão MVC (Model, View, Controller) para dividir seus mecanismos e separar as camadas
de Lógica de Negócio, Gerenciador de Requisições e Interface do usuário.

**************************
INDEX.PHP
**************************

O arquivo index.php é o que comporta as rotas do sistema. Cada requisição, alteração ou manipulação de URL é passada por ele. Caso não encontre a rota necessária, 
será redirecionado para a página de Error. 

**************************
Helpers
**************************

Utilizando as boas práticas e evitando repetição de código foi utilizando um Trait de funções para o uso de sessões e carregamento de view.

**************************
.htaccess
**************************

O arquivo htaccess foi utiizado para manipular a requisição enviado para index.php. Para o funcionamento correto das rotas esse arquivo é indispensável.

**************************
OBSERVAÇÕES
**************************

- Bootstrap
- jQuery
- jQuery Mask
