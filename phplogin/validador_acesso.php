<?php 

session_start();

if (!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] !='sim' )
{
    header('Location:../login.php?login=erro2');
}

?>