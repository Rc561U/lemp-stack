<?php

//$id = $_GET['user_id'];
$id = 10;

class Update
{
    public static function make($user_id)
    {
        $db = require "../models/database.connect.php";
        $sth = $db->prepare('SELECT * FROM `users` WHERE user_id = ?');
        $sth->execute([$user_id]);
        return $sth->fetch(PDO::FETCH_ASSOC);
    }
}

//return Update::make($id);
