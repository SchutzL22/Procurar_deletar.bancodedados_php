<?php
include_once("conectar.php");

if (isset($_POST['cidade'])) {
    $pesquisa = $_POST['cidade'];

    // deixa em minúsculo para comparar sem diferenciar maiúsculas/minúsculas
    $pesquisa = strtolower($pesquisa);

    // monta a consulta (procura parte do nome da cidade)
    $sql = "SELECT * FROM alunos WHERE LOWER(cidade) LIKE '%$pesquisa%'";
    $resultado = mysqli_query($strcon, $sql);

    echo "<!DOCTYPE html>";
    echo "<html>";
    echo "<head><title>Resultado da Pesquisa</title></head>";
    echo "<body>";

    echo "<h2>Resultado da pesquisa por cidade: " . htmlspecialchars($_POST['cidade']) . "</h2>";

    echo "<table border='1' style='width:70%; border-collapse:collapse;'>";
    echo "<tr><th>NOME</th><th>ENDEREÇO</th><th>CIDADE</th></tr>";

    if (mysqli_num_rows($resultado) > 0) {
        while ($registro = mysqli_fetch_assoc($resultado)) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($registro['nome']) . "</td>";
            echo "<td>" . htmlspecialchars($registro['endereco']) . "</td>";
            echo "<td>" . htmlspecialchars($registro['cidade']) . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='3'>Nenhum resultado encontrado</td></tr>";
    }

    echo "</table>";

    echo "</body>";
    echo "</html>";

    mysqli_close($strcon);
} else {
    echo "Nenhuma cidade informada!";
}
?>