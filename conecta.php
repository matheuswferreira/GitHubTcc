<?php
//extra dica para MySql 8:
//ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY 'senha123';
//variáveis contendo parâmetros para realizar a conexão
//vale lembrar que tais parâmetros poderão ser diferentes
//conforme o ambiente que você precisará conectar-se
//1-servidor e porta
$servidor ="localhost";
//2- usuário do mysql
$usuario="id16326751_usuario";
//senha deste usuário, se não utilizar senha, deixar como ""
$senha="Etec@2021@PW3";
//nome do schema que você irá conectar-se
$database="id16326751_base";
//variável receberá o retorno da tentativa de conexão com o banco de dados
$conn = mysqli_connect($servidor,$usuario,$senha,$database);
//se não der certo a conexão, mostrará o erro originado no Mysql
if(!$conn)
{
echo "Erro ao conectar no banco de dados".mysqli_connect_error();
}
?>