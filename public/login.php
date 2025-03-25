<?php
if ($_SERVER['REQUEST_METHOD']=='POST'){
    $login=$_POST['login'];
    $password=$_POST['senha'];
    
    header (Location:../../public/caixa.php);
}

?>