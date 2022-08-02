<?php

class Asset
{
    public static function is_loggedIn()
    {
        if (!isset($_SESSION)) {
            session_start();
        }
        return  isset($_SESSION['login']);
    }
}

