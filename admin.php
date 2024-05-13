<?php include "cabecalho.php";?>

<h2>Ambiente de Gerencia</h2>


<?php include "conexao.php";?>
<table class="table table-striped table-hover">
    <thead class="table-dark">
        <tr>
            <th>NÚMERO</th>
            <th>NOME</th>
            <th>QUANTIDADE</th>
            <th>PREÇO</th>
            <th>FORNECEDOR</th>
            <th>AÇOES</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql = "select * from tb_estoque";
        $resultado = mysqli_query($conexao, $sql);
        while($umItem = mysqli_fetch_assoc($resultado)):
        ?>
        <tr>
            <td><?=$umItem["id"];?></td>
            <td><?=$umItem["nome"];?></td>
            <td><?=$umItem["quantidade"];?></td>
            <td><?=$umItem['preco'];?></td>
            <td><?=$umItem['fornecedor'];?></td>
            <td>
                <a href="editar.php?id=<?= $umItem['id']?>" class="btn btn-dark">EDITAR</a>
                <a href="saida.php?id=<?= $umItem['id']?>" class="btn btn-danger">SAIDA</a>
                

            </td>

        </tr>
        <?php
        endwhile;
        mysqli_close($conexao);
        ?>
    </tbody>
    
</table>
<a href="form-inserir.php" class="btn btn-dark">NOVO ITEM</a>

<?php include "rodape.php"; ?>