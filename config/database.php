<?php
require_once 'config.php';
trait Database
{
    protected $db;

    public function connect() {
        try {
            $this->db = new PDO("mysql:host=" . HOST . ";dbname=" . DBNAME, USERNAME, PASSWORD);
            return $this->db;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}

?>