<?php 
if(isset($_GET['act']))
	$act = $_GET['act'];
else $act = '';

switch ($act) {
	case 'list':

		$m = new adminModel();
		$data = $m->selectUser(0);

		if(isset($_GET['id'])){
			$status = $_GET['status'];
			$id = $_GET['id'];
			$fq = $m->updatefq($status,$id);

			header("location:index.php?com=user&act=list");
			return;

		}

		$data1 = $m->selectUser(1);
		require_once "view/user/list.php";
		break;
	case 'add':

		if(isset($_POST['add_user'])){
			$name = $_POST['name'];
			$mail = $_POST['mail'];
			$acc = $_POST['acc'];
			$pass = $_POST['pass'];
			$status = $_POST['status'];

			$m = new adminModel();
			$data = $m->insertUser($name,$mail,$acc,$pass,$status);

			header("location:index.php?com=user&act=list");
			return;
		}
		

		require_once "view/user/add_user.php";
		break;

	case 'edit':
		if(isset($_GET['id'])){
			$id = $_GET['id'];
			$m = new adminModel();
			$data = $m->selectOne("user",$id);
			if(isset($_POST['edit_user'])){
				$name = $_POST['name'];
				$mail = $_POST['mail'];
				$acc = $_POST['acc'];
				$pass = $_POST['pass'];
				$status = $_POST['status'];

				$m = new adminModel();
				$edit = $m->updateUser($name,$mail,$acc,$pass,$status,$id);

				header("location:index.php?com=user&act=list");
				return;

			}
		}

		require_once "view/user/edit_user.php";
		break;
	case 'delete':
    	if(isset($_GET['id'])){
    		$id = $_GET['id'];
    		$m = new adminModel();
    		$data = $m-> delete("user", $id);
    		if($data){
    			header("location:index.php?com=user&act=list");
				return;
    		}

		}
		

		require_once "view/user/list.php";
		break;
	
	default:
		# code...
		break;
}
?>