<?php
    session_start();
    if(isset($_SESSION['email'])){

?>

<?php
require_once '../../../conexao/ConexaoPDO.php';

$conn = ConexaoPDO::getInstance();

$queryEscola = "SELECT nomeEscola FROM Escola WHERE idEscola = 5";
$resultEscola = $conn->query($queryEscola)->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../estilo/estilo.css">
    <title>Inserir Respostas</title>
</head>
<body>
    <header>
        <img src="../../../imagens/sampaweb_logo.png" alt="Logo" class="logo">
        <h1>Bem-vindo ao sistema SAMPAWEB</h1>
    </header>

   <div>
    <br>
    <h3>Você entrou na escola:</strong> <?= $resultEscola['nomeEscola'] ?></p>
      Agora escolha a disciplina para realizar a digitação das respostas do aluno. </h3>
   </div>
    <div>
        <a href="inserirResp_LP.php" class="linkacesso-link">Língua Portuguesa</a>
        <a href="inserirResp_MAT.php" class="linkacesso-link">Matemática</a>
        
    </div>
    <div>
        <a href="../../../logout.php" class="linkacesso-link">Sair do sistema</a>  
    </div>
    

    <footer>
        <p>Sistema desenvolvido por: <strong>Renato José Valente - Ano 2025</strong></p>
    </footer>
</body>
</html>
<?php
    }else{
    ?>
    echo "<script>alert('Acesse a página de Login!!!'); location.href='../../../login.php';</script>";
 <?php
}
 ?>