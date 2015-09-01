<?php

// conexion con la base de datos
    include ('includes/class.Conexion.php');
         $db = new conexion();
// END

  $ruta = isset($_GET['ruta']) ? $_GET['ruta'] : 'default'; //definir la variable $ruta
 
    switch ($ruta) {
        case 'login':
            if (isset($_POST['login'])) {
                if (!empty($_POST['user']) and !empty($_POST['pass'])) {

                    include ('includes/class.Acceso.php');
                    $login = new Acceso($_POST['user'],$_POST['pass'],'');
                    $login->Login();

                }else{
                    header('location: index.php');
                }
            }
            break;
        case 'registro':
            if (isset($_POST['registro'])) {
                if (!empty($_POST['user']) and !empty($_POST['pass']) and !empty($_POST['email'])) {
                    include ('includes/class.Acceso.php');
                    $registro = new Acceso($_POST['user'],$_POST['pass'],$_POST['email']);
                    $registro->Registro();
                }else{
                    echo "campos vacios";
                }
            }else{
              include ('registro.php');   
            }
            break;
        case 'usuario':
            header('location: index.php?ruta=usuarios');
            break;
        default:
             include ('login.php'); 
            break;
    }

   
         
?>

