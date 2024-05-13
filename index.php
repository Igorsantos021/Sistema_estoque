<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<body class="p-3 mb-2 bg-secondary text-white">
    
<div class="container mt-5">

<h1>SISTEMA DE ESTOQUE</h1>
<br>

<?php include "conexao.php";?>
<table class="table table-striped table-hover">
    <thead class="table-dark">
        <tr>

            <th>NOME</th>
            <th>QUANTIDADE</th>
            <th>PREÇO</th>
            <th>FORNECEDOR</th>

        </tr>
    </thead>
    <tbody>
        <?php
        $sql = "select * from tb_estoque";
        $resultado = mysqli_query($conexao, $sql);
        while($umItem = mysqli_fetch_assoc($resultado)):
        ?>
        <tr>
            <td><?=$umItem["nome"];?></td>
            <td><?=$umItem["quantidade"];?></td>
            <td><?=$umItem['preco'];?></td>
            <td><?=$umItem['fornecedor'];?></td>
        </tr>
        <?php
        endwhile;
        mysqli_close($conexao);
        ?>
        
        
    </tbody>
    
</table>

<a href="admin.php" class="btn btn-dark">EDITAR ESTOQUE</a>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>