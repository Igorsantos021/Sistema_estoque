<?php include "cabecalho.php";?>

<h2>CADASTRAR UM NOVO ITEM</h2>
<form method="post" action="salvar.php" enctype="multipart/form-data">
    <input type="text" name="nome" placeholder="Nome" class="form-control">
    <br>
    <input type="number" name="quantidade" placeholder="Quantidade" class="form-control">
    <br>
    <input type="text" name="preco" placeholder="Preço" class="form-control">
    <br>
    <input type="text" name="fornecedor" placeholder="Fornecedor" class="form-control">
    <br>
    <br>
    <button class="btn btn-dark" type="submit">SALVAR ITEM</button>

</form>

<?php include "rodape.php"?>