<?php  
$nome = $_POST['nome'];
$quantidade= $_POST['quantidade'];
$preco = $_POST['preco'];
$fornecedor = $_POST['fornecedor'];


include "conexao.php";
$sql = "insert into tb_estoque(nome, quantidade, preco, fornecedor) Value ('$nome','$quantidade','$preco','$fornecedor')";
mysqli_query($conexao, $sql);

mysqli_close($conexao);

header("location:admin.php");
?>