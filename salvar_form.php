<?php
session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$pergunta1 = filter_input(INPUT_POST, 'pergunta1', FILTER_SANITIZE_STRING);
$pergunta2 = filter_input(INPUT_POST, 'pergunta2', FILTER_SANITIZE_STRING);
$pergunta3 = filter_input(INPUT_POST, 'pergunta3', FILTER_SANITIZE_STRING);
$pergunta4 = filter_input(INPUT_POST, 'pergunta4', FILTER_SANITIZE_STRING);

//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$result_usuario = "INSERT INTO infos(Nome, Ano, Pergunta1, Pergunta2, Pergunta3) VALUES ('$nome', '$pergunta1', '$pergunta2', '$pergunta3', '$pergunta4')";
$resultado_usuario = mysqli_query($conn, $result_usuario);

?>