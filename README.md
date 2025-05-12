# Oficina sobre Laravel

## Passo a passo para configuração do ambiente.

Antes de colocar a mão no código realmente, é necessário criar nosso banco de dados. Abra seu SGBD e crie um novo banco chamado "oficina_laravel" (nome recomendado, mas pode utilizar o de sua preferência, mas você terá de lembrar qual é depois.)

Abra o arquivo ".env" do seu projeto, nele você verá uma sessão parecida com:

DB_CONNECTION=sqlite // pgsql para postgres, mysql para mysql
DB_HOST=127.0.0.1 // a principio, não é necessário alterar
DB_PORT=3306 // 5432 para postgres, 3306 mysql
DB_DATABASE=laravel // nome que você deu ao seu banco de dados
DB_USERNAME=root // nome do usuario do banco, por padrao é postgres ou mysql
DB_PASSWORD= // senha do banco, por padrão postdba (postgres) e mydba (mysql)

Agora, no seu terminal, rode o seguinte comando:

`php artisan migrate`

Se não mostrou nenhum erro na tela, você já tem seu banco funcionando.

Para subir o servidor, rode
`php artisan serve`

E pronto, você já tem seu projeto rodando localmente.
