<?php
include ("recebeDados.php");

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Sport Kits </title>
        <link rel="stylesheet" href="styles/style.css" type="text/css"/>
    </head>
<body>
    <div id="container">
        <div id="login">
            <form action="pag_login.php?pag=checkLogin" method="POST">
                <img src="images/Logo.png" width="140" height="140" alt="Imagem Logo"/>
                <div id="input_login">
                    <span> Usuário </span>
                        <input name="input_username" type="text"/><br/>
                    <span> Senha </span>
                        <input name="input_password" type="password"/><br/>
                    <input type="submit" value="Login"/>
                    <a href="cadastra.php"><input action="onclick" type="button" value="Cadastre-se"/></a>
                
                </div>
            </form>
            
        </div>
    </div>
</body>    
</html>

<?php
    if(isset($_GET["pag"])) {
        $username = $_POST["input_username"];
        $password = $_POST["input_password"];
        
        if($username == "" or $password == "") {
            echo "<script> alert ('Preencha todos os campos'); location.href='pag_login.php'</script>";
        }
    }
?>