<?php
include_once("conectar.php"); 
// Inclui o arquivo "conectar.php" para estabelecer a conexão com o banco de dados.

$pesquisa = $_POST['cidade']; 
// Obtém o valor da cidade selecionada pelo usuário no formulário HTML
?>
<!DOCTYPE html>
<html>
<head>
    <title>Resultado da Pesquisa por Cidade</title>
    <style>
        /* Defina estilos CSS para esta página, se necessário */
    </style>
</head>
<body>
    <!-- Criando tabela e cabeçalho de dados -->
    <table border="1" style="width:50%">
        <tr>
            <th>NOME</th>
            <th>ENDEREÇO</th>
            <th>CIDADE</th>
        </tr>
        <?php
// Realiza a busca na tabela "alunos" com base na cidade selecionada.
$sql = "SELECT * FROM alunos WHERE cidade = '$pesquisa'";
$resultado = mysqli_query($strcon, $sql);

while ($registro = mysqli_fetch_array($resultado)) {
    $nome = $registro['nome'];
    $endereco = $registro['endereco'];
    $cidade = $registro['cidade'];

    echo "<tr>";
    echo "<td>" . $nome . "</td>";
    echo "<td>" . $endereco . "</td>";
    echo "<td>" . $cidade . "</td>";
    echo "</tr>";
}
mysqli_close($strcon); // Fecha a conexão
echo "</table>";       // Fecha a tabela
?>
</body>
</html>