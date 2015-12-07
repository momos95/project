<?php
include_once '../models/User.php';
session_start();

if(isset($_SESSION['user']) && $_SESSION['user']->getProfil_id()== '3' )
{
    header("Location: ../View/ProfileController/adminView.php");
}

?>

