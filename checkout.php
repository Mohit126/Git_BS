<?php

session_start();
if(!isset($_SESSION['email'])){
    include("index.php");
}
else{
    include("payment.php");
}

?>
