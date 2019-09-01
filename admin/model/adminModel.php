<?php 
require_once "DBConnect.php";

class adminModel extends DBConnect{

	function insertType($name,$nameko,$title_seo,$desc_seo,$key_seo){
		$sql = "INSERT INTO theloai
				(name,nameko,title_seo,desc_seo,key_seo)
				VALUES 
				('$name','$nameko','$title_seo','$desc_seo','$key_seo')
				
		";
		return $this->executeQuery($sql);
	}

	function updateType($name,$nameko,$title_seo,$desc_seo,$key_seo,$idType){
		$sql = "UPDATE theloai
				SET name = '$name',
					nameko = '$nameko',
					title_seo = '$title_seo',
					desc_seo = '$desc_seo',
					key_seo = '$key_seo'
				WHERE id =$idType
		";
		return $this->executeQuery($sql);

	}

	function insertNews($idtype,$img = "img23.jpg",$title,$titleko,$ndesc,$content,$status,$title_seo,$desc_seo,$key_seo){
		$sql = "INSERT INTO tintuc
				(idtype,img,title,titleko,ndesc,content,status,title_seo,desc_seo,key_seo)
				VALUES 
				($idtype,'$img','$title','$titleko','$ndesc','$content',$status,'$title_seo','$desc_seo','$key_seo')
				
		";
		return $this->executeQuery($sql);
	}

	function updateNews($title,$titleko,$ndesc,$content,$status,$title_seo,$desc_seo,$key_seo,$idNews){
		$sql = "UPDATE tintuc
				SET 
					title = '$title' ,
					titleko = '$titleko' ,
					ndesc = '$ndesc' ,
					content = '$content' ,
					status = '$status' ,
					title_seo = '$title_seo' ,
					desc_seo = '$desc_seo' ,
					key_seo = '$key_seo'
				WHERE id =$idNews
		";
		return $this->executeQuery($sql);

	}
	function updateCauhinh($ten,$diachi,$email,$dienthoai,$web,$fanpage,$titleseo,$descseo,$keyseo,$logo,$icon,$map,$ana){
		$sql = "UPDATE cauhinh
				SET ten ='$ten',
				diachi = '$diachi',
				email = '$email',
				dienthoai ='$dienthoai',
				web = '$web',
				fanpage = '$fanpage',
				titleseo = '$titleseo',
				descseo = '$descseo',
				keyseo = '$keyseo',
				logo = '$logo',
				icon = '$icon',
				map = '$map',
				ana = '$ana'
		";
		return $this->executeQuery($sql);

	}
	function selectNews(){
		$sql = "SELECT tt.*, tl.* , tt.id as idNews
				FROM tintuc as tt
				INNER JOIN theloai as tl 
				ON tt.idtype = tl.id
				ORDER BY tt.id DESC

				";
		return $this->getMoreRows($sql);
	}
	function selectNewsft($position,$display){
		$sql = "SELECT tt.*, tl.* , tt.id as idNews
				FROM tintuc as tt
				INNER JOIN theloai as tl 
				ON tt.idtype = tl.id
				ORDER BY tt.id DESC
				LIMIT $position,$display

				";
		return $this->getMoreRows($sql);
	}

	//Hàm lấy dữ liệu cần sửa theo id
	function selectOne($tb,$id){
		$sql = "SELECT *
				FROM $tb
				WHERE id = $id

		";
		return $this->getOneRow($sql);

	}
	//Hàm search
	function searchNews($key){
		$sql = "SELECT tt.*, tl.* , tt.id as idNews
				FROM tintuc as tt
				INNER JOIN theloai as tl 
				ON tt.idtype = tl.id
				WHERE title like '% $key %'
				OR title like '%$key %'
				OR title like '% $key%'
				";
		return $this->getMoreRows($sql);
	}
	//hàm insert user
	function insertUser($name,$mail,$acc,$pass,$status){
		$sql = "INSERT INTO user(name,mail,acc,pass,status)
				VALUES ('$name','$mail','$acc','$pass',$status)
		";
		return $this->executeQuery($sql);
	}
	// Hàm select user 
	function selectUser($id){
		$sql = "SELECT u.*
				FROM user as u
				WHERE u.status = $id
				ORDER BY u.id DESC
				

		";
		return $this->getMoreRows($sql);

	}
	// Hàm update phân quyền user
	function updatefq($status,$id){
		$sql = "UPDATE user
				SET status = '$status'
				WHERE id = $id
		";
		return $this->executeQuery($sql);
	}
	// Hàm update user
	function updateUser($name,$mail,$acc,$pass,$status,$id){
		$sql = "UPDATE user
				SET name = '$name',
					mail = '$mail',
					acc = '$acc',
					pass = '$pass',
					status = $status

				WHERE id = $id;
				";
		return $this->executeQuery($sql);
	}
	// Login 
	function login($txt,$pass){
		$sql = "SELECT * 
				FROM user 
				WHERE acc = '$txt'
				AND pass = '$pass'
				AND status = 1
		";
		return $this->getOneRow($sql);
	}

	function selectlm($tb,$position,$display){
		$sql = "SELECT *
				FROM $tb 
				ORDER BY id DESC
				LIMIT $position,$display

		";
		return $this->getMoreRows($sql);
	}
	function select($tb){
		$sql = "SELECT *
				FROM $tb 
				ORDER BY id DESC

		";
		return $this->getMoreRows($sql);
	}
	//Hàm xóa 
	function delete($tb,$id){
		$sql = "DELETE FROM $tb 
				WHERE id = $id
		";
		return $this->executeQuery($sql);
	}

}
?>