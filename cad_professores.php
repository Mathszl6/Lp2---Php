<?php 
$conexao = mysqli_connect('localhost', 'root', '', 'escola');

$cpf = $_POST['cpf'];
$nome = $_POST['nome'];
$dataNasc = $_POST['dataNasc'];
$salario = $_POST['salario'];

$sql ="INSERT INTO professor(cpf,nome,dataNasc,salario)values('$cpf','$nome','$dataNasc','$salario')";

$retorno = mysqli_query($conexao,$sql);
echo 'Professor cadastrado com sucesso!';
?>
<hr>
<a href="professor.php">Tela inicial</a>