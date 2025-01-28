<?php 
$conexao = mysqli_connect('localhost', 'root', '', 'escola');

$idTel = $_POST['idTel'];
$ddd = $_POST['ddd'];
$numero = $_POST['numero'];
$descricao = $_POST['descricao'];
$cpfProf = $_POST['cpfProf'];

$sql ="INSERT INTO telefone(idTel,ddd,numero,descricao,cpfProf)values('$idTel','$ddd','$numero','$descricao','$cpfProf')";

$retorno = mysqli_query($conexao,$sql);
echo 'Telefone cadastrado com sucesso!';
?>
<hr>
<a href="telefone.php">Tela inicial</a>