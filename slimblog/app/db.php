<?php
class db{

	private $dbhost = 'localhost';
	private $dbuser = 'local';
	private $dbpass = 'host';
	private $dbname = 'slimblog';



//connection 

 public function connect(){

 	$mysql_conn_string = "mysql:host=$this->dbhost;dbname=$this->dbname";
 	$dbConnection = new PDO($mysql_conn_string ,$this->dbuser , $this->dbpass);

 	$dbConnection->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);

 	return $dbConnection;
 }

}