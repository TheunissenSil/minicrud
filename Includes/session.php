<?php
session_start();

if(!isset($_SESSION['id']) && !isset($_SESSION['name'])) {
    header("Location: ../Pages/loginPage.php");
    exit();
}