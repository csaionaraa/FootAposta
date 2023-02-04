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
$timea1 = $_POST['cp2'];
$timeb1 = $_POST['cp3'];
$sql = "INSERT INTO aposta (t1,t2, login,data) VALUES ('$timea1','$timeb1','$login','$data')";
$query=$mysqli->query($sql);

//Dados do Segundo Jogo
$timea2 = $_POST['cp4'];
$timeb2 = $_POST['cp5'];
$sql = "INSERT INTO aposta (t1,t2, login,data) VALUES ('$timea2','$timeb2','$login','$data')";
$query=$mysqli->query($sql);

//Dados do Segundo Jogo
$timea2 = $_POST['cp6'];
$timeb2 = $_POST['cp7'];
$sql = "INSERT INTO aposta (t1,t2, login,data) VALUES ('$timea2','$timeb2','$login','$data')";
$query=$mysqli->query($sql);

//Dados do Segundo Jogo
$timea2 = $_POST['cp8'];
$timeb2 = $_POST['cp9'];
$sql = "INSERT INTO aposta (t1,t2, login,data) VALUES ('$timea2','$timeb2','$login','$data')";
$query=$mysqli->query($sql);

//Dados do Segundo Jogo
$timea2 = $_POST['cp10'];
$timeb2 = $_POST['cp11'];
$sql = "INSERT INTO aposta (t1,t2, login,data) VALUES ('$timea2','$timeb2','$login','$data')";
$query=$mysqli->query($sql);

//Dados do Segundo Jogo
$timea2 = $_POST['cp12'];
$timeb2 = $_POST['cp13'];

//Dados do Segundo Jogo
$timea2 = $_POST['cp14'];
$timeb2 = $_POST['cp15'];
$sql = "INSERT INTO aposta (t1,t2, login,data) VALUES ('$timea2','$timeb2','$login','$data')";
$query=$mysqli->query($sql);

//Dados do Segundo Jogo
$timea2 = $_POST['cp16'];
$timeb2 = $_POST['cp17'];
$sql = "INSERT INTO aposta (t1,t2, login,data) VALUES ('$timea2','$timeb2','$login','$data')";
$query=$mysqli->query($sql);

//Dados do Segundo Jogo
$timea2 = $_POST['cp18'];
$timeb2 = $_POST['cp19'];
$sql = "INSERT INTO aposta (t1,t2, login,data) VALUES ('$timea2','$timeb2','$login','$data')";
$query=$mysqli->query($sql);

//Dados do Segundo Jogo
$timea2 = $_POST['cp20'];
$timeb2 = $_POST['cp21'];
$sql = "INSERT INTO aposta (t1,t2, login,data) VALUES ('$timea2','$timeb2','$login','$data')";
$query=$mysqli->query($sql);

//Dados do Segundo Jogo
$timea2 = $_POST['cp22'];
$timeb2 = $_POST['cp23'];
$sql = "INSERT INTO aposta (t1,t2, login,data) VALUES ('$timea2','$timeb2','$login','$data')";
$query=$mysqli->query($sql);

//Dados do Segundo Jogo
$timea2 = $_POST['cp24'];
$timeb2 = $_POST['cp25'];
$sql = "INSERT INTO aposta (t1,t2, login,data) VALUES ('$timea2','$timeb2','$login','$data')";
$query=$mysqli->query($sql);

//Dados do Segundo Jogo
$timea2 = $_POST['cp26'];
$timeb2 = $_POST['cp27'];
$sql = "INSERT INTO aposta (t1,t2, login,data) VALUES ('$timea2','$timeb2','$login','$data')";
$query=$mysqli->query($sql);

//Dados do Segundo Jogo
$timea2 = $_POST['cp28'];
$timeb2 = $_POST['cp29'];
$sql = "INSERT INTO aposta (t1,t2, login,data) VALUES ('$timea2','$timeb2','$login','$data')";
$query=$mysqli->query($sql);

//Dados do Segundo Jogo
$timea2 = $_POST['cp30'];
$timeb2 = $_POST['cp31'];
$sql = "INSERT INTO aposta (t1,t2, login,data) VALUES ('$timea2','$timeb2','$login','$data')";
$query=$mysqli->query($sql);

//Dados do Segundo Jogo
$timea2 = $_POST['cp32'];
$timeb2 = $_POST['cp33'];
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