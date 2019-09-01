<?php
class DBConnect{
private $conn = null;
private $stsm = null;
	function __construct($dbname='news',$username='root',$password=''){
		$dsn = "mysql:dbname=$dbname;host=localhost";
		try{
			$this->conn = new PDO($dsn,$username,$password);
			$this->conn->exec('SET NAMES utf8');
		}
		catch(PDOException $e){
			echo $e->getMessage();
			die;		
		}
	}

	function executeQuery($sql){
		$this->stsm = $this->conn->prepare($sql);
		return $this->stsm->execute();
	}

	function getMoreRows($sql){
		$check = $this->executeQuery($sql);
		if($check){
			return $this->stsm->fetchAll(PDO::FETCH_OBJ);
		}
		return false;
	}

	function getOneRow($sql){
		$check = $this->executeQuery($sql);
		if($check){
			return $this->stsm->fetch(PDO::FETCH_OBJ);
		}
		return false;
	}




	function getRecentIdInsert(){
        return $this->conn->lastInsertId();
    }

}
?>