<?php 
$conexao = mysqli_connect('localhost', 'root', '', 'escola');

$nome = $_POST['nome'];
$matricula = $_POST['matricula'];
$cpf = $_POST['cpf'];
$dataNasc = $_POST['dataNasc'];
$email = $_POST['email'];

$sql ="INSERT INTO alunos(nome,matricula,cpf,dataNasc,email)values('$nome','$matricula','$cpf','$dataNasc','$email')";

$retorno = mysqli_query($conexao,$sql);
echo 'Aluno cadastrado com sucesso!';
?>
<hr>
<a href="alunos.php">Tela inicial</a>