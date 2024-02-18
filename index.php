<?php
include 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $codigoBarras = $_POST['codigoBarras'];
    $sql = "SELECT * FROM produtos WHERE codigoBarras = '$codigoBarras'";
    $result = $conn->query($sql);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busca de Preços</title>
</head>
<body>

    <h1>Busca de Preços</h1>

    <form action="index.php" method="POST">
        <label for="codigoBarras">Código de Barras:</label>
        <input type="text" name="codigoBarras" required>
        <button type="submit">Buscar</button>
    </form>

    <?php
    if (isset($result) && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<h2>{$row['nome']}</h2>";
            echo "<p>Preço Varejo: R$ {$row['preco1']}</p>";
            echo "<p>Preço Atacado: R$ {$row['preco2']}</p>";
            echo "<p>{$row['descricao']}</p>";
            echo "<p>Categoria: {$row['categoria']}</p>";
        }
    } else {
        echo "<p>Nenhum produto encontrado.</p>";
    }
    ?>

</body>
</html>