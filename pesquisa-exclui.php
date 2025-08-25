<?php
include_once("conectar.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>Pesquisa Alunos</title>
<style>
/* Seu CSS funciona aqui! */
</style>
</head>

<body>
<!-- Criando tabela e cabeçalho de dados: -->
<table border="1" style=" width:50%">
    <tr>
        <th>NOME</th>
        <th>ENDEREÇO</th>
        <th>CIDADE</th>
    </tr>
<!-- Preenchendo a tabela com os dados do banco: -->
<?php
$sql = "SELECT * FROM alunos";
$resultado = mysqli_query($strcon, $sql);

while ($registro = mysqli_fetch_array($resultado))
// O loop while percorre os resultados da consulta e armazena cada linha em $registro.
//A cada laço do while, preenchemos uma linha da nossa tabela
{
    $nome = $registro['nome'];
    $endereco = $registro['endereco'];
    $cidade = $registro['cidade'];
    echo "<tr>";
    echo "<td>". $nome . "</td>";
    echo "<td>". $endereco . "</td>";
    echo "<td>". $cidade . "</td>";
    echo "</tr>";
}

mysqli_close($strcon);// Fecha a conexão com o banco de dados quando não há mais dados a serem manipulados.
echo "</table>"; // Fecha a tabela HTML que exibe os resultados.
?>
<form name="exclui" action="excluir.php" method="post"> <!-- Form que redireciona action para excluir.php -->
    <p>Digite o nome que deseja excluir:
        <input type="text" name="nome" /></p> <!-- Campo para digitar o nome que se deseja excluir -->
    <input type="submit" name="botao" value="Enviar"/> <!-- botão que Executa a exclusao -->
</form>

<script>/* Seu JavaScript funciona aqui! */ </script>
</body>
</html>