<?php 
if (isset($_POST['cerrarSession'])){
    session_destroy();
    header('Location: ../../login.php');
} ?>