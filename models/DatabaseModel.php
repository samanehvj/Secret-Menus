<?php

class DatabaseModel
{
    public static function connect()
    {
        return mysqli_connect('localhost', 'root', 'root', 'secret-menus');
    }
}
