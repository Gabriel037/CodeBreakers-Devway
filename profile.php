<?php
    // Iniciando sessão caso ainda não tenha sido iniciada
    if (!isset($_SESSION)) {
        session_start();
    }
    // Incluindo o arquivo connect.php
    include_once('connect.php');

    //pegando a variável de seção 
    $id_user = $_SESSION['id'];

    // pesquisando no banco 
    $pesquisa_usuario = "SELECT * FROM users WHERE id = '$id_user'";
    $resultado_pesquisa_usuario = mysqli_query($conexao, $pesquisa_usuario);
    $row_pesquisa_usuario = mysqli_fetch_assoc($resultado_pesquisa_usuario);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets\style_profile.css">
    <title>Document</title>
</head>
<body>
    <header>
        <nav class="navbar">
           
            <a href="system.php"></a>
            
        </nav>
    </header>


    <div class="grid-container">
        <div class="grid-item">
            <div class="img_profile1"><a href="-----"><img src="assets\characters\defaultCharacter.png" class="aa"></a></div>
        </div>
        <div class="grid-item">
            <div class="title_profile">
                <h2 class="text">Perfil</h2></div>
                <div class="form_profile">
                   <!-- <form  class="form"> -->
                    <input id="inputbloq1" type="text" name="Usuario" value="<?php echo $row_pesquisa_usuario['nome'];?>">
                    <input id="inputbloq2" type="text" name="E-mail" value="<?php echo $row_pesquisa_usuario['email'];?>">
                   <!-- </form> -->
                </div>
            </div>
        </div>
     
    </div>
</body>
<script>

    var inputElement1 = document.getElementById("inputbloq1");
    inputElement1.disabled = true;

    var inputElement2 = document.getElementById("inputbloq2");
    inputElement2.disabled = true;

</script>
</html>