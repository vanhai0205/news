<?php 
require_once "DBConnect.php";

class tintucModel extends DBConnect{
	// Hàm lấy ra tin slide
	function getSlide(){
		$sql = "SELECT tt.*, tl.*
				FROM tintuc as tt
				INNER JOIN theloai as tl 
				ON tt.idtype = tl.id
				ORDER BY tt.id DESC
				LIMIT 0,3
	
		";
		return $this->getMoreRows($sql);
	}
	// Hàm lấy ra tin đặc biệt
	function getNewsDB(){
		$sql = "SELECT tt.*, tl.*
				FROM tintuc as tt
				INNER JOIN theloai as tl 
				ON tt.idtype = tl.id
				WHERE status = 1
				ORDER BY tt.id DESC
				LIMIT 0,4
				";
		return $this->getMoreRows($sql);
	}
	// Hàm lấy ra tin mới
	function getNewNews(){
		$sql = "SELECT tt.*, tl.* , tl.id as idtype
				FROM tintuc as tt
				INNER JOIN theloai as tl 
				ON tt.idtype = tl.id
				ORDER BY tt.id DESC
				LIMIT 0,4
		";
		return $this->getMoreRows($sql);
	}
	// Hàm lấy ra tin nhiều lượt xem
	function getOneView(){
		$sql = "SELECT tt.*, tl.*, tt.id as idNews
				FROM tintuc as tt
				INNER JOIN theloai as tl 
				ON tt.idtype = tl.id
				ORDER BY tt.view DESC
				";
				return $this->getOneRow($sql);
	}
	function getNewsView($id){
		$sql = "
				SELECT tt.*, tl.*
				FROM tintuc as tt
				INNER JOIN theloai as tl 
				ON tt.idtype = tl.id
				WHERE tt.id <> '$id'
				ORDER BY tt.view DESC
				
				LIMIT 0,6;
		";
		return $this->getMoreRows($sql);
	}
	//Hàm lấy thể loại có view cao nhất
	function getTypeView(){
		$sql = "SELECT tt.view, tl.name, SUM(view) as tongView
				FROM tintuc tt 
				INNER JOIN theloai tl 
				ON tt.idtype = tl.id 
				GROUP BY tl.name 
				ORDER BY tongView DESC 
				LIMIT 0,1
		";
		return $this->getOneRow($sql);
	}
	// Hàm lấy ra tin từ thể loại nhiều view nhất
	function getNewsRandom($name){
		$sql = "SELECT tt.*, tl.*
				FROM tintuc as tt
				INNER JOIN theloai as tl 
				ON tt.idtype = tl.id
				WHERE tl.name = '$name'
				ORDER BY tt.id DESC 
				LIMIT 0,6

		";
		return $this->getMoreRows($sql);
	}
	//Hàm lấy tin theo thể loại ở index
	function getTT($id){
		$sql = "SELECT tt.*, tl.*
				FROM tintuc as tt
				INNER JOIN theloai as tl 
				ON tt.idtype = tl.id
				WHERE tl.id = $id
				ORDER BY tt.id DESC
				LIMIT 0,4
				";
		return $this->getMoreRows($sql);
	}

	
	// Hàm lấy nội dung tin tức
	function getContentByUrl($url){
		$sql =" SELECT tt.*, tl.id,tl.name,tl.nameko, tt.id as idTin
				FROM tintuc as tt
				INNER JOIN theloai as tl 
				ON tt.idtype = tl.id
				WHERE tt.titleko = '$url'
				";

		return $this->getOneRow($sql);
	}
	// Hàm tăng lượt xem trang
	function addView($add,$id){
		$sql = "UPDATE tintuc
				SET view = $add
				WHERE id = '$id'
		";
		return $this->executeQuery($sql);
	} 
	// Hàm lấy danh sách thể loại 
	function getMenu(){
		$sql =" SELECT *
				FROM theloai
				";
		return $this->getMoreRows($sql);
	}
	// Hàm lấy tin theo từng thể loại
	function getTypeByUrl($url){
		$sql = "SELECT tt.*, tl.*, tl.id as idType
				FROM tintuc as tt
				INNER JOIN theloai as tl 
				ON tt.idtype = tl.id
				WHERE tl.nameko = '$url' 

		";
        return $this->getMoreRows($sql);
	}

	// Hàm Search
	function search($key){
		$sql = "SELECT tt.*, tl.*
				FROM tintuc as tt
				INNER JOIN theloai as tl 
				ON tt.idtype = tl.id
				WHERE title like '% $key %'
				OR ndesc like '% $key %'

		";
		return $this->getMoreRows($sql);
	}
	// Hàm lấy thông tin cấu hình
	function contact(){
		$sql = "SELECT *
				FROM cauhinh
	
		";
		return $this->getOneRow($sql);
	}
	//Hàm lấy comment
	function getComment($idTin){
		$sql = "SELECT cm.* , u.*
				FROM comment cm
				INNER JOIN user u 
				ON iduser = u.id
				WHERE idtintuc = $idTin

		";
		return $this->getMoreRows($sql);
	}
	// Hàm đăng kí user
	function signUp($name,$mail,$acc,$pass){
		$sql = "INSERT INTO user(name,mail,acc,pass) 
				VALUES ('$name','$mail','$acc','$pass')

		";
		return $this->executeQuery($sql) == true ? $this->getRecentIdInsert() : false;
	}
	// Hàm đăng nhập
	function logIn($acc,$pass){
		$sql = "SELECT *
				FROM user 
				WHERE acc = '$acc'
				AND pass = '$pass'
		";
		return $this->getOneRow($sql);
	}
	// Hàm lưu comment
	function comment($idtintuc,$iduser,$txt){
		$sql = "INSERT INTO comment(idtintuc,iduser,content)
				VALUES ('$idtintuc','$iduser','$txt')

		";
		return $this->executeQuery($sql);
	}
	// Hàm lấy type bằng id

}
?>
