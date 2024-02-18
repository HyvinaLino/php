<?php
include 'conexao.php';


$sql = "SELECT * FROM produtos";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administração</title>
</head>
<body>

    <h1>Página de Administração</h1>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Código de Barras</th>
            <th>Preço Varejo</th>
            <th>Preço Atacado</th>
            <th>Descrição</th>
            <th>Categoria</th>
            <th>Ações</th>
        </tr>

        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>{$row['id']}</td>";
                echo "<td>{$row['nome']}</td>";
                echo "<td>{$row['codigoBarras']}</td>";
                echo "<td>{$row['preco1']}</td>";
                echo "<td>{$row['preco2']}</td>";
                echo "<td>{$row['descricao']}</td>";
                echo "<td>{$row['categoria']}</td>";
                echo "<td><a href='editar.php?id={$row['id']}'>Editar</a> | <a href='excluir.php?id={$row['id']}'>Excluir</a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='8'>Nenhum produto cadastrado.</td></tr>";
        }
        ?>
    </table>

</body>
</html>
