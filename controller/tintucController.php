<?php 
require_once "model/tintucModel.php";
require_once "helper/Pager.php";





class tintucController{
	//Xử lí trang chủ
	function index(){
		$model = new tintucModel();
		$newsDB = $model->getNewsDB();    // Lấy tin đặc biệt
		$newsNew = $model->getNewNews();  // Lấy tin mới nhất
		$oneView = $model->getOneView();
		$view = $model->getNewsView($oneView->idNews);  // Lấy tin nhiều lượt xem

		$slide = $model->getSlide();  // Lấy tin Slide
		$typeView = $model->getTypeView();
		$name = $typeView->name;
		$random = $model->getNewsRandom($name); //Lấy tin tin từ thể loại có view cao nhất
		$cauhinh = $model->contact();
		$TT = $model->getTT(4);
		$DL = $model->getTT(7);
		$KH = $model->getTT(3);

		return array(
			'newsdb' => $newsDB,
			'new' => $newsNew,
			'oneview' => $oneView,
			'view' => $view,
			'slide' => $slide,
			'random' => $random,
			'tt' => $TT,
			'dl' => $DL,
			'kh' => $KH,
			'typeView' => $typeView,
			'cauhinh' => $cauhinh

		);
	}
	
	// Xử lí trang nội dung
	function content(){
		$model = new tintucModel();
		$url = $_GET['url'];
		$content = $model->getContentByUrl($url);  // Lấy nội dung tin bởi url
		if(!$content){
			header("location:404.html");
			return;
		}
		$add = $content->view + 1;
		$addView = $model->addView($add,$content->idTin); // Tăng lượt view

		$idTin = $content->idTin;
		$comment = $model->getComment($idTin);   // Lấy comment

		
		return array(
			'content' => $content,
			'comment' => $comment
		);
	}

	// Xử lí trang thể loại
	function type(){
		$model = new tintucModel();
		$menu = $model->getMenu();


		$url = $_GET['url'];
		$type = $model->getTypeByUrl($url); // Lấy nội dung tin bởi url


		return array(
			'menu' => $menu,
			'type' => $type

		);
	}
	// Xử lí trang tìm kiếm
	function search($key){
		$model = new tintucModel();
		$search = $model->search($key);
		return $search;
	}
	// Xử lí trang liên hệ
	function contact(){
		$model = new tintucModel();
		$show = $model->contact();

		return array(
			'show' => $show
		);
	}
	//Hàm xử lí trang đăng ký
	function signUp($name,$mail,$acc,$pass){
		$model = new tintucModel();
		$signup = $model->signUp($name,$mail,$acc,$pass);
		if($signup > 0){
			$_SESSION['success'] = "Đăng ký thành công";
			if(isset($_SESSION['error'])){
				unset($_SESSION['error']);
				header("location:#");
				return;
			}
			header("location:#");
			return;
		}
		else{
			$_SESSION['error'] = "Đăng ký thất bại";
			if(isset($_SESSION['success'])){
				unset($_SESSION['success']);
				header("location:#");
				return;
			}
			return;
		}
	}
	// Hàm xử lí trang đăng nhập 
	function logIn($acc,$pass){
		$model = new tintucModel();
		$login = $model->logIn($acc,$pass);


		if($login){
			$_SESSION['id'] = $login->id;
			$_SESSION['success'] = "Bạn có thể bình luận";
			if(isset($_SESSION['error'])){
				unset($_SESSION['error']);
				header("location:#");
				return;
			}
			header("location:#");
				return;
		}
		else{
			$_SESSION['error'] = "Sai thông tin tài khoản";
			if(isset($_SESSION['success'])){
				unset($_SESSION['success']);
				header("location:#");
				return;
			}
			header("location:#");
				return;

		}


	}
	// Hàm lưu comment
	function comment($idtintuc,$txt){
		if(isset($_SESSION['id'])){
			$model = new tintucModel();
			$iduser = $_SESSION['id'];
			$comment = $model->comment($idtintuc,$iduser,$txt);
			if(isset($_SESSION['error'])){
				unset($_SESSION['error']);
				header("location:#");
				return;
			}
			header("location:#");
				return;
				
			
			
		}
		else{
			$_SESSION['error'] = "Vui lòng đăng nhập để bình luận!";
			if(isset($_SESSION['success'])){
				unset($_SESSION['success']);
				header("location:#");
				return;
			}
			header("location:#");
				return;
		}

	}


}

?>