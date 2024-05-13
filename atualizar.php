<?php
include "conexao.php";
$id = $_GET['id'];
$nome = $_POST['nome'];
$quantidade = $_POST['quantidade'];

$sql = "update tb_estoque set nome='$nome', quantidade='$quantidade' where id='$id'";

mysqli_query($conexao, $sql);
mysqli_close($conexao);
header('location:admin.php');

?>