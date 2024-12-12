<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validacion</title>
</head>
<body>
    <?php
        var_dump($_REQUEST);
        include("include/conexion.php");
        // Inicio de sesion en Log.php
        if (isset($_REQUEST["user"]) && isset($_REQUEST["pass"])){
            $user = strtolower($_REQUEST["user"]);
            $pass = $_REQUEST["pass"];
            echo "1";

            // Construyo consulta
            $sql = "SELECT * FROM usuarios WHERE nombre='$user' and contraseña='$pass";
            $result = $conn->query($sql);

            $row_count = $result->num_rows;
            session_start();
            if($row_count >= 1){
                $_SESSION["user"]=strtolower($_REQUEST["user"]);
                $_SESSION["pass"]=$_REQUEST["pass"];
                if($_SESSION["user"]=="admin"){
                    $_SESSION["msg"]="Ha iniciado sesion con admin";
                    Header("Location: Index_Adm.php");
                }
                else{
                    $_SESSION["msg"]="Ha iniciado sesion con $user";
                    Header("Location: Index.php");
                }
            }
            else {
                $_SESSION["msg"]="Las credenciales son incorrectas";
                Header("Location: Log.php");
            }
        }
        // Comprueba que no existe el usuario y lo crea
        elseif (isset($_REQUEST["CKuser"]) && isset($_REQUEST["CKpass"]) && isset($_REQUEST["CKmail"])){
            $user = strtolower($_REQUEST["CKuser"]);
            $pass = $_REQUEST["CKpass"];
            $email = strtolower($_REQUEST["CKemail"]);
            $conn = new mysqli("localhost", "root", "", "tienda");
            $sql = "SELECT * FROM usuarios WHERE nombre='$user' or email='$email'";
            $result = $conn->query($sql);
            $row_count = $result->num_rows;
            session_start();
            if (empty($_REQUEST["CKuser"]) || empty($_REQUEST["CKpass"]) || empty($_REQUEST["CKemail"])){
                session_start();
                $_SESSION["msg"]="Error en las credenciales";
                header("Location: Log.php");
            }
            elseif ($row_count >= 1){
                $_SESSION["msg"]="El nombre o email coincide con otros usuarios";
                header("Location: Log.php");
            }
            else{
                $conn = new sqli("localhost", "root", "", "tienda");
                $sql = "INSERT INTO usuarios (nombre,email,contraseña) VALUES ('$user','$email','$pass')";
                $conn->query($sql);
                $_SESSION["msg"]="El usuario ha sido registrado correctamente";
                header("Location: Log.php");
            }
        }
        echo "2";
        
    ?>        
    fggggg
</body>
</html>