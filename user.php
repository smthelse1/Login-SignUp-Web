<?php 
    session_start();
    if(isset($_SESSION['Имя'])){
        echo("Вы вошли как:". $_SESSION['Имя']['nick']);
    }
    else{
        echo("Не получилось");
    }
?>