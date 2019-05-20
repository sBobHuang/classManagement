<?php


class Model {

    protected $pdo;

    public function __construct() {
        $this->pdo = new PDO("mysql:host=bobhuang.xyz;dbname=class", "tzc", 'root', array(PDO::MYSQL_ATTR_INIT_COMMAND => "set names utf8"));
    }

    public function __destruct() {
        $this->pdo = null;
    }
}