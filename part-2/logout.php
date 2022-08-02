<?php
include 'asset.php';
class Logout
{
    public function logout()
    {
        if(Asset::is_loggedIn()) {
            unset($_SESSION["login"]);
            header("location: index.php?logout=done");
        } else {
            header('location: index.php');
        }
    }
}
$logObj = new Logout();
$logObj->logout();