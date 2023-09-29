<?php

include_once("conexao.php");

$usuario = $_POST['informeusuario'];
$senha = $_POST['informesenha']

$sql_logar = "select * from cad_funcionarios(login,senha)"
$logando = $conecta->query($query);



/*
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];
 
$query = "SELECT * FROM usuarios WHERE usuario='$usuario' and senha='$senha'";
 
$conexao = new PDO('mysql:host=127.0.0.1;dbname=sitepessoal', 'root', '');
$resultado = $conexao->query($query);
$logado = $resultado->fetch();
$id_logado = $logado['id'];
 
if ($logado == null) {
   // Usuário ou senha inválida
   header('Location: usuario-erro.php');
} 
else {
   session_start();
   $_SESSION['usuario_logado'] = $id_logado;
   // Direciona o usuário para o painel administrativo do sistema
   header('Location: painel.php');
}
die();

*/
?>

<?php
session_start();
session_destroy();
header('Location: index.html');
?>
