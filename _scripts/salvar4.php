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
$timea1 = $_POST['cp101'];
$timeb1 = $_POST['cp102'];
$sql = "INSERT INTO aposta (t1,t2, login,data) VALUES ('$timea1','$timeb1','$login','$data')";
$query=$mysqli->query($sql);

//Dados do Segundo Jogo
$timea2 = $_POST['cp103'];
$timeb2 = $_POST['cp104'];
$sql = "INSERT INTO aposta (t1,t2, login,data) VALUES ('$timea2','$timeb2','$login','$data')";
$query=$mysqli->query($sql);

//Dados do Segundo Jogo
$timea2 = $_POST['cp105'];
$timeb2 = $_POST['cp106'];
$sql = "INSERT INTO aposta (t1,t2, login,data) VALUES ('$timea2','$timeb2','$login','$data')";
$query=$mysqli->query($sql);

//Dados do Segundo Jogo
$timea2 = $_POST['cp107'];
$timeb2 = $_POST['cp108'];
$sql = "INSERT INTO aposta (t1,t2, login,data) VALUES ('$timea2','$timeb2','$login','$data')";
$query=$mysqli->query($sql);

//Dados do Segundo Jogo
$timea2 = $_POST['cp109'];
$timeb2 = $_POST['cp110'];
$sql = "INSERT INTO aposta (t1,t2, login,data) VALUES ('$timea2','$timeb2','$login','$data')";
$query=$mysqli->query($sql);

//Dados do Segundo Jogo
$timea2 = $_POST['cp111'];
$timeb2 = $_POST['cp112'];
$sql = "INSERT INTO aposta (t1,t2, login,data) VALUES ('$timea2','$timeb2','$login','$data')";
$query=$mysqli->query($sql);

//Dados do Segundo Jogo
$timea2 = $_POST['cp113'];
$timeb2 = $_POST['cp114'];
$sql = "INSERT INTO aposta (t1,t2, login,data) VALUES ('$timea2','$timeb2','$login','$data')";
$query=$mysqli->query($sql);

//Dados do Segundo Jogo
$timea2 = $_POST['cp115'];
$timeb2 = $_POST['cp116'];
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
                location.href="../novo1.php";
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