<?php
session_start();
?>
<html>
    <body>
        <link href="../css/sb-admin-2.min.css" rel="stylesheet">
        <script src="../vendor/jquery/jquery.min.js"></script>
        <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php
//echo json_encode($_POST);
date_default_timezone_set('America/Sao_Paulo');
$login = '';
$data = date("Y-m-d H:i:s");
include "config.php";

//Dados do Primeiro Jogo
$timea1 = $_POST['cp35'];
$timeb1 = $_POST['cp36'];
$sql = "INSERT INTO aposta (t1,t2, login,data) VALUES ('$timea1','$timeb1','$login','$data')";
$query=$mysqli->query($sql);

//Dados do Segundo Jogo
$timea2 = $_POST['cp37'];
$timeb2 = $_POST['cp38'];
$sql = "INSERT INTO aposta (t1,t2, login,data) VALUES ('$timea2','$timeb2','$login','$data')";
$query=$mysqli->query($sql);

//Dados do Segundo Jogo
$timea2 = $_POST['cp39'];
$timeb2 = $_POST['cp40'];
$sql = "INSERT INTO aposta (t1,t2, login,data) VALUES ('$timea2','$timeb2','$login','$data')";
$query=$mysqli->query($sql);

//Dados do Segundo Jogo
$timea2 = $_POST['cp41'];
$timeb2 = $_POST['cp42'];
$sql = "INSERT INTO aposta (t1,t2, login,data) VALUES ('$timea2','$timeb2','$login','$data')";
$query=$mysqli->query($sql);

//Dados do Segundo Jogo
$timea2 = $_POST['cp43'];
$timeb2 = $_POST['cp44'];
$sql = "INSERT INTO aposta (t1,t2, login,data) VALUES ('$timea2','$timeb2','$login','$data')";
$query=$mysqli->query($sql);

//Dados do Segundo Jogo
$timea2 = $_POST['cp45'];
$timeb2 = $_POST['cp46'];

//Dados do Segundo Jogo
$timea2 = $_POST['cp47'];
$timeb2 = $_POST['cp48'];
$sql = "INSERT INTO aposta (t1,t2, login,data) VALUES ('$timea2','$timeb2','$login','$data')";
$query=$mysqli->query($sql);

//Dados do Segundo Jogo
$timea2 = $_POST['cp49'];
$timeb2 = $_POST['cp50'];
$sql = "INSERT INTO aposta (t1,t2, login,data) VALUES ('$timea2','$timeb2','$login','$data')";
$query=$mysqli->query($sql);

//Dados do Segundo Jogo
$timea2 = $_POST['cp51'];
$timeb2 = $_POST['cp52'];
$sql = "INSERT INTO aposta (t1,t2, login,data) VALUES ('$timea2','$timeb2','$login','$data')";
$query=$mysqli->query($sql);

//Dados do Segundo Jogo
$timea2 = $_POST['cp53'];
$timeb2 = $_POST['cp54'];
$sql = "INSERT INTO aposta (t1,t2, login,data) VALUES ('$timea2','$timeb2','$login','$data')";
$query=$mysqli->query($sql);

//Dados do Segundo Jogo
$timea2 = $_POST['cp55'];
$timeb2 = $_POST['cp56'];
$sql = "INSERT INTO aposta (t1,t2, login,data) VALUES ('$timea2','$timeb2','$login','$data')";
$query=$mysqli->query($sql);

//Dados do Segundo Jogo
$timea2 = $_POST['cp57'];
$timeb2 = $_POST['cp58'];
$sql = "INSERT INTO aposta (t1,t2, login,data) VALUES ('$timea2','$timeb2','$login','$data')";
$query=$mysqli->query($sql);

//Dados do Segundo Jogo
$timea2 = $_POST['cp59'];
$timeb2 = $_POST['cp60'];
$sql = "INSERT INTO aposta (t1,t2, login,data) VALUES ('$timea2','$timeb2','$login','$data')";
$query=$mysqli->query($sql);

//Dados do Segundo Jogo
$timea2 = $_POST['cp61'];
$timeb2 = $_POST['cp62'];
$sql = "INSERT INTO aposta (t1,t2, login,data) VALUES ('$timea2','$timeb2','$login','$data')";
$query=$mysqli->query($sql);

//Dados do Segundo Jogo
$timea2 = $_POST['cp63'];
$timeb2 = $_POST['cp64'];
$sql = "INSERT INTO aposta (t1,t2, login,data) VALUES ('$timea2','$timeb2','$login','$data')";
$query=$mysqli->query($sql);

//Dados do Segundo Jogo
$timea2 = $_POST['cp65'];
$timeb2 = $_POST['cp66'];
$sql = "INSERT INTO aposta (t1,t2, login,data) VALUES ('$timea2','$timeb2','$login','$data')";
$query=$mysqli->query($sql);


if($query){?>
    <script type="text/javascript">
        Swal.fire({
            title:'Salvo',
            text:'Aposta feita com Sucesso',
            icon:'success',
            confirmButtonText:'Ok'
        }).then((result)=>{
            if(result.isConfirmed){
                location.href="../index.php";
            }
        })

    </script>
<?php }else{ ?>
<script type="text/javascript">
        swal("Erro");
    </script>
<?php }

?>

</body>
</html>