<div class="testando"></div>
<div><h3 class="textrodada">Primeira Rodada</h3></div>
<div class="testando"></div>
<?php include "_scripts\config.php"; ?>

    <div class="container">
        
        <?php
            $sql = "SELECT * FROM dados_jogos where rodada = '1 RODADA'";
            $query = $mysqli->query($sql);
            $i = 1;
            $j = 2;
            $a = 1;
            while ($dados = $query->fetch_array()){
        ?>
        
        <div class="matchs-by-group">
            <form method="post" action="_scripts/salvar.php" class="">
            <div class="match">
            <input type="hidden" name="jogo<?php echo $a; ?>" value="<?php echo $dados['id']; ?>">
            <?php echo $dados['horario']; ?> - 
            <?php echo $dados['local']; ?><br>
            <div class="caixa2"> 
            <img class="img" src="img/<?php echo $dados['timea']; ?>.png">
            <?php echo $dados['timea']; ?>
            <input type="text" class="caixinha" class=" inp form-control" name="cp<?php echo $i+$a; ?>"><a class="xcaixinha"> X </a> 
            <input type="text" class="caixinha" name="cp<?php echo $j+$i; ?>" class=" inp form-control">
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
        <div><h3 class="textrodada">Segunda Rodada</h3></div>
        <div class="testando"></div>
        <?php include "_scripts\config.php"; ?>
        <div class="container">
            <?php
                $sql = "SELECT * FROM dados_jogos where rodada = '2 RODADA'";
                $query = $mysqli->query($sql);
                $i = 34;
                $j = 35;
                $a = 1;
                while ($dados = $query->fetch_array()){
            ?>
            
            <div class="matchs-by-group">
            <form method="post" action="_scripts/salvar2.php" class="">
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
        </div>

        <div class="testando"></div>
        <div><h3 class="textrodada">Terceira Rodada</h3></div>
        <div class="testando"></div>
        <?php include "_scripts\config.php"; ?>
        <div class="container">
            <?php
                $sql = "SELECT * FROM dados_jogos where rodada = '3 RODADA'";
                $query = $mysqli->query($sql);
                $i = 67;
                $j = 68;
                $a = 1;
                while ($dados = $query->fetch_array()){
            ?>
            
            <div class="matchs-by-group">
            <form method="post" action="_scripts/salvar3.php" class="">
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
            <div>
                <a href="novo1.php"><button class="button2">Next>></button></a>
            </div>

        </div>
<!-- PARTE 4 -->

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