<?php
require_once("config.php");



class Functions{

    public $db, $config;

    public function __construct($config){
        
        $this->config = $config;
        $this->db = new mysqli($config['db_host'], $config['db_user'], $config['db_pass'], $config['db_name']);
        if ($this->db->connect_error) {
            die("Couldn't connect to MySQL: ".$this->db->connect_error);
        }
        mysqli_query($this->db, "SET NAMES utf8");
    }
	
	}

$Functions = new Functions($cfg);

?>