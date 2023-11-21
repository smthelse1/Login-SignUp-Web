<?php 
session_start();
include(dbconnect.php);

$login = $_POST['zxcursed'];
$password = $_POST['zxcursed1337'];
$md5_password = md5($password);
$query = mysqli_query($db, query: "SELECT * FROM 'Имя' WHERE 'zxcursed' = '{$email}' AND 'password' = '{$md5_password}' ");
if(mysqli_num_rows($query) == 1){
    $_SESSION['Имя'] = ['nick' => $login]; 
    header(header:"Location: /user.php");
}
else{
    echo("authorization exception");
}


?>