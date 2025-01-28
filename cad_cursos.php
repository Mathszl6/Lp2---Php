<?php 
$conexao = mysqli_connect('localhost', 'root', '', 'escola');

$codigo = $_POST['codigo'];
$nome = $_POST['nome'];
$ch = $_POST['ch'];
$modalidade = $_POST['modalidade'];
$num_vagas = $_POST['num_vagas'];
$coordenador = $_POST['coordenador'];

$sql ="INSERT INTO cursos(codigo,nome,ch,modalidade,num_vagas,coordenador)values('$codigo','$nome','$ch','$modalidade','$num_vagas','$coordenador')";

$retorno = mysqli_query($conexao,$sql);
echo 'Curso cadastrado com sucesso!';
?>
<hr>
<a href="cursos.php">Tela inicial</a>