<?php
/*
class Bdd
//{
    private $host;
    private $user;
    private $password;
    private $dbName;
    private $bdd;

    public function __construct()
    {
        $this->host = 'mysql-mgbams.alwaysdata.net';
        $this->user = 'mgbams';
        $this->password = 'iwuchukwu28';
        $this->dbName = 'mgbams_weather';

        try {
            $this->bdd = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->dbName . ';charset=utf8', $this->user, $this->password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        } catch (Exception $e) {
            var_dump('Err lors de la tentative de connexion: ' . $e->getMessage());
        }
    }

    public function getBdd()
    {
        return $this->bdd;
    }
}
*/