<?php

class Database{

    public static function getConnection(){
        $conn = new mysqli("localhost", "root", "", "family_tree");
        return $conn;
    }

}