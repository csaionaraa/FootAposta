<?php

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link css -->
    <link href="css/estilobom.css" rel="stylesheet">

    <link rel="stylesheet" href="css/inicio.css">

     <!-- Required meta tags -->
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--Boot link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>FootAposta - Jogos</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link css -->
    <link href="css/inicio.css" rel="stylesheet">
    <!-- Link responsividade css --->
    <!--Boot link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>FootAposta - Jogos</title>
</head>
<section>
    <header id="letras">
      <ul>
      <p class="foottext">FootAposta</p>
      <li class="nav-item">
        <a class="nav-link" href="inicial.php">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">Fases</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="novo1.php">Classificatorias</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="resultados.php">Resultados</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Sair</a>
      </li>
      </ul>
    </header>
<body>
<div class="testando"></div>
<div><h3 class="textrodada">Oitavas de Final</h3></div>
<div class="testando"></div>
<?php include "_scripts\config.php"; ?>
    <div class="container">
        <?php
            $sql = "SELECT * FROM dados_jogos where rodada = 'OITAVAS'";
            $query = $mysqli->query($sql);
            $i = 100;
            $j = 101;
            $a = 1;
            while ($dados = $query->fetch_array()){
        ?>
        
        <div class="matchs-by-group">
            <form method="post" action="_scripts/salvar4.php" class="">
            <div class="match">
            <input type="hidden" name="jogo<?php echo $a; ?>" value="<?php echo $dados['id']; ?>">
            <?php echo $dados['horario']; ?> - 
            <?php echo $dados['local']; ?><br>
            <div class="caixa2"> 
            <img class="img" src="img/<?php echo $dados['timea']; ?>.png">
            <?php echo $dados['timea']; ?>
            <input type="text" class="caixinha" class=" inp form-control" name="cp<?php echo $i+$a; ?>"><a class="xcaixinha"> X </a> 
            <input type="text" class="caixinha" name="cp<?php echo $j+$a; ?>" class=" inp form-control">
            <?php echo $dados['timeb']; ?>
            <img class="img" src="img/<?php echo $dados['timeb']; ?>.png"><br>
            </div>
            <div class="textdata">
            <?php echo $dados['data']; ?>
            </div>
            <div class="texttipo">
            <?php echo $dados['tipo']; ?>
            </div>
            </div>

            <?php $i++; $j++; $a++;} ?>
        </div>
        
        <div><button type="submit" class="button1">PALPITAR</button></div>
        
        </form>
        <div class="scroll-top active">
            <img src="/img/arrow.png" alt="arrow">
        </div>
<!-- PARTE 2 -->  
<div class="testando"></div>
<div><h3 class="textrodada">Quartas de Final</h3></div>
<div class="testando"></div>
<?php include "_scripts\config.php"; ?>
    <div class="container">
        <?php
            $sql = "SELECT * FROM dados_jogos where rodada = 'QUARTAS'";
            $query = $mysqli->query($sql);
            $i = 117;
            $j = 118;
            $a = 1;
            while ($dados = $query->fetch_array()){
        ?>
        
        <div class="matchs-by-group">
            <form method="post" action="_scripts/salvar5.php" class="">
            <div class="match">
            <input type="hidden" name="jogo<?php echo $a; ?>" value="<?php echo $dados['id']; ?>">
            <?php echo $dados['horario']; ?> - 
            <?php echo $dados['local']; ?><br>
            <div class="caixa2"> 
            <img class="img" src="img/<?php echo $dados['timea']; ?>.png">
            <?php echo $dados['timea']; ?>
            <input type="text" class="caixinha" class=" inp form-control" name="cp<?php echo $i+$a; ?>"><a class="xcaixinha"> X </a> 
            <input type="text" class="caixinha" name="cp<?php echo $j+$a; ?>" class=" inp form-control">
            <?php echo $dados['timeb']; ?>
            <img class="img" src="img/<?php echo $dados['timeb']; ?>.png"><br>
            </div>
            <div class="textdata">
            <?php echo $dados['data']; ?>
            </div>
            <div class="texttipo">
            <?php echo $dados['tipo']; ?>
            </div>
            </div>

            <?php $i++; $j++; $a++;} ?>
        </div>
        
        <div><button type="submit" class="button1">PALPITAR</button></div>
        
        </form>
<!-- PARTE 3 -->
<div class="testando"></div>
<div><h3 class="textrodada">Semifinal e Final</h3></div>
<div class="testando"></div>
<?php include "_scripts\config.php"; ?>
    <div class="container">
        <?php
            $sql = "SELECT * FROM dados_jogos where rodada = 'SEMIFINAL'";
            $query = $mysqli->query($sql);
            $i = 126;
            $j = 127;
            $a = 1;
            while ($dados = $query->fetch_array()){
        ?>
        
        <div class="matchs-by-group">
            <form method="post" action="_scripts/salvar6.php" class="">
            <div class="match">
            <input type="hidden" name="jogo<?php echo $a; ?>" value="<?php echo $dados['id']; ?>">
            <?php echo $dados['horario']; ?> - 
            <?php echo $dados['local']; ?><br>
            <div class="caixa2"> 
            <img class="img" src="img/<?php echo $dados['timea']; ?>.png">
            <?php echo $dados['timea']; ?>
            <input type="text" class="caixinha" class=" inp form-control" name="cp<?php echo $i+$a; ?>"><a class="xcaixinha"> X </a> 
            <input type="text" class="caixinha" name="cp<?php echo $j+$a; ?>" class=" inp form-control">
            <?php echo $dados['timeb']; ?>
            <img class="img" src="img/<?php echo $dados['timeb']; ?>.png"><br>
            </div>
            <div class="textdata">
            <?php echo $dados['data']; ?>
            </div>
            <div class="texttipo">
            <?php echo $dados['tipo']; ?>
            </div>
            </div>

            <?php $i++; $j++; $a++;} ?>
        </div>
        
        <div><button type="submit" class="button1">PALPITAR</button></div>
        
        </form>
                <a href="novo1.php"><button class="button2">Next>></button></a>
            </div>
            <div>
                <a href="index.php"><button class="button3">Back<<</button></a>
            </div>
        </div>

        <script src="./js/script.js"></script>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->
</body>

</html>