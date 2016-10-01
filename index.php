<?php
session_start();
require_once "config.php";
if (!isset($_SESSION["id"])|| $_SESSION["id"]!= session_id()) {
    require_once "controleur/routeur.php";}
else{
    require_once "controleur/routeuradmin.php";
}
