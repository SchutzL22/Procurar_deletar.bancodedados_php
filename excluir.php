<?php
include_once("conectar.php");
// Inclui o arquivo "conectar.php" para estabelecer uma conexão com o banco de dados.
$nome = $_POST['nome'];
// Obtém o valor do nome que foi enviado pelo formulário HTML
// através do método POST e o armazena na variável $nome.
$sql = "DELETE FROM alunos WHERE nome = '$nome'";
// Cria uma consulta SQL para excluir registros da tabela "alunos"
// onde o valor da coluna "nome" corresponde ao valor armazenado em $nome.
$resultado = mysqli_query($strcon, $sql);
// Executa a consulta SQL no banco de dados usando a função mysqli_query().
// O resultado da execução é armazenado na variável $resultado.
echo "Exclusão realizada com sucesso!";
mysqli_close($strcon);
// É importante fechar a conexão após a conclusão das operações no banco de dados.
?>