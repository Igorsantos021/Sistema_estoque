<?php
include "cabecalho.php";
include "conexao.php";
$id = $_GET['id'];
$nome = "nome do item";
$quantidade = "quantidade do item";
$preco = "preço do item";
$fornecedor = "fornecedor do item";

$sql = "select * from tb_estoque where id = $id";
$resultado = mysqli_query($conexao, $sql);
while($umItem = mysqli_fetch_assoc($resultado)):
    $nome = $umItem['nome'];
    $quantidade = $umItem['quantidade'];
    $preco = $umItem['preco'];
    $fornecedor = $umItem['fornecedor'];
endwhile;
?>

<h2>EDITAR O ITEM <?=$id;?></h2>
<form method="post" action="atualizar.php?id=<?=$id;?>" enctype="multipart/form-data">
    <input type="text" name="nome" placeholder="Nome" class="form-control" 
    value="<?= $nome; ?>">
    <br>
    
    <input type="number" name="quantidade" placeholder="Quantidade" class="form-control" 
    value="<?= $quantidade; ?>">
    <br>
    <br>
    <button class="btn btn-dark" type="submit">SALVAR ITEM</button>

</fomr>    