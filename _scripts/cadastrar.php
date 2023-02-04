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
include "config.php";
$email = $_POST['email'];
$senha = md5($_POST['senha']);
$nome = $_POST['nome'];



$sql = "SELECT id FROM login WHERE email = '$email'";
$query = $mysqli->query($sql);
$total = $query->num_rows;



if($total>=1){?>
    <script type="text/javascript">
        Swal.fire({
            title:'Ops!',
            text:'Usuário já cadastrado!',
            icon:'error',
            confirmButtonText:'Ok'
        }).then((result)=>{
            if(result.isConfirmed){
                location.href="../login.php";
            }
        })
    </script>
<?php }else{
    $sql = "INSERT INTO login values (NULL, '$email', '$senha','$nome')";
    $query = $mysqli->query($sql);
    
    if($query){?>
            <script type="text/javascript">
                Swal.fire({
                    title:'Salvo',
                    text:'Usuário Cadastrado com Sucesso',
                    icon:'success',
                    confirmButtonText:'Ok'
                }).then((result)=>{
                    if(result.isConfirmed){
                        location.href="../login.php";
                    }
                })
            </script>
    <?php }else{ ?>
        <script type="text/javascript">
                swal("Erro");
            </script>
    <?php }
}


?>

</body>
</html>