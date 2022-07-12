<?php
$titulo= str_replace('#', '-', $_POST['titulo']);
$categoria= str_replace('#', '-', $_POST['categoria']);
$descricao= str_replace('#', '-', $_POST['descricao']);

$texto = $_SESSION['id'] . '#'. $titulo . '#' . $categoria . '#' . $descricao .  PHP_EOL;

//abrindo o arquivo, escrevendo texto e fechando arquivo.
$arquivo = fopen('../../app_help_desk/arquivo.txt','a');
fwrite($arquivo, $texto);
fclose($arquivo);

header('Location: abrir_chamado.php');

?>