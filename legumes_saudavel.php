      <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="pagina_inicial.html">PEACH.</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link" href="alimento_saudavel.php">Frutas</a>
          <a class="nav-item nav-link" href="legumes_saudavel.php">Legumes</a>
          <a class="nav-item nav-link" href="hortalicas_saudavel.php">Hortaliças</a>
          <a class="nav-item nav-link" href="frutos_saudavel.php">Frutos</a>

        </div>
      </div>
    </nav>
      </body>
      <?php

        include_once 'conexao.php';

      echo  '<form id="form1" name="form1" method="post" action="[COLOR=Red]legumes_saudavel.php[/COLOR]">';
       
        $L_bd=pg_query($banco, "SELECT NOME, CLASSIFICACAO, PLANTAR, COLHEITA, BENEFICIO FROM ALIMENTO WHERE CLASSIFICACAO LIKE 'Legume'");
        if (pg_num_rows($L_bd)>0) {   
        
        echo "<table border='1' align='center'>";
        echo "<tr>";
        echo "<th>Nome</th>";
        echo "<th>Classificação</th>";
        echo "<th>Plantar</th>";
        echo "<th>Colheita</th>";
        echo "<th>Beneficio</th>";
        echo "<th>Excluir</th>";
        echo "</tr>";


        while ($tabela = pg_fetch_array($L_bd)) {
          echo "<tr>";
          echo "<td>" .$tabela['nome']. "</td>";
          echo "<td>" .$tabela['classificacao']. "</td>";
          echo "<td>" .$tabela['plantar']. "</td>";
          echo "<td>" .$tabela['colheita']. "</td>";
          echo "<td>" .$tabela['beneficio']. "</td>";
          echo "<td><img src='lixeira.jpg' width='20' name='excluir' id='excluir'> </td>";
          echo "</tr>";
          
        }
        echo "</table>";
        }
        if(isset($_GET['excluir'])){
   
        $id_excluir = $_GET['excluir'];
        $comando = pg_query("DELETE FROM ALIMENTO WHERE NOME = '$nome' AND CLASSIFICACAO = '$classificacao' AND PLANTAR = '$plantar', AND COLHEITA = '$colheita' AND BENEFICIO = '$beneficio'");


}

        ?>

<!DOCTYPE html>
<html>
<head>
  <title>Alimentos saudaveis</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <meta charset="utf-8">      
      
</head>
<body>
<style type="text/css">
    body{
      background:#D3D3D3; 
    }
    table {
    border-collapse: collapse;
}

table, th, td {
    border: 1px solid black;
}
th {
    background-color: #4CAF50;
    color: white;
}
th, td {
    padding: 15px;
    text-align: left;
}
</style>
</body>
</html>