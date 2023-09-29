<?php



include_once("conexao.php");
    
    $nome               = $_POST['nome'];
    $login              = $_POST['login'];
    $senha              = $_POST['senha'];
    $telefone           = $_POST['telefone'];
    $tipo_usuario       = $_POST['tipousuario'];
    $statususuario      = $_POST['statususuario'];
    $gps                = $_POST['gps'];
    $evento             = $_POST['evento'];
    $fiscalizacao       = $_POST['fiscalizacao'];
    $alertaparquimetro  = $_POST['alertaparquimetro'];
    $caixa              = $_POST['caixa'];

    $sql = "insert into cad_funcionarios(nome,login,senha,telefone,tipousuario,
        statususuario,gps,evento,fiscalizacao,alertaparquimetro,troco) 
        values
        ('$nome','$login','$senha','$telefone','$tipo_usuario','$statususuario','$gps',
            '$evento','$fiscalizacao','$alertaparquimetro','$caixa')";

    $salvar = mysqli_query($conexao,$sql);       

    $fechar = mysqli_close($conexao);



?>