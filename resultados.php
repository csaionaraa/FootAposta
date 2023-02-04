
<?php
include("_scripts/config.php");

$consulta = "SELECT * FROM dados_jogos";
$con = $mysqli->query($consulta) or die($mysqli->error);
?>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link css -->
    <link href="css/inicioo1.css" rel="stylesheet">
    <!-- Link responsividade css --->
    <!--Boot link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>FootAposta - Jogos</title>
  </head>
  <body>
  <section>
    <header id="letras">
      <ul>
      <p class="foottext">FootAposta</p>
      <li class="nav-item">
        <a class="nav-link" href="inicial.php">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">Fases/Grupos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="novo1.php">Classificatórias</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="resultados.php">Resultados</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Sair</a>
      </li>
      </ul>
    </header>
<!-- CARDS -->
<table class="card">
      <tr class="tr">
        <td class="tr">Time</td>
        <td class="tr"></td>
        <td>Placar</td>
        <td>Placar</td>
        <td></td>
        <td>Time</td>
      </td>
      
      <?php while($dado = $con->fetch_array()){?>
      <tr class="card">
        <td class="carddd"><img class="img" src="img/<?php echo $dado['timea']; ?>.png"></td>
        <td class="text"> <?php echo $dado["timea"];?></td>
        <td class="text"> <?php echo $dado["rt1"];?></td>
        <td  class="xcaixinha"> X </td>
        <td class="text"> <?php echo $dado["rt2"];?></td>
        <td class="text"> <?php echo $dado["timeb"];?></td>
        <td class="carddd1"><img class="img" src="img/<?php echo $dado['timeb']; ?>.png"></td>
      </tr>

      <?php } ?>
    </table>
</div>
  </body>
</html> 