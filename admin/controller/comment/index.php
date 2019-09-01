<?php 
if(isset($_GET['act'])){
	$act = $_GET['act'];

}
else $act ='';

switch ($act) {
	case 'list':
		$m = new adminModel();
		$data = $m->select('comment');
		require_once "view/comment/list_comment.php";
		break;
    case 'delete':
	    if(isset($_GET['id'])){
			$m = new adminModel();
			$id = $_GET['id'];
			$data = $m->delete('comment',$id);
			header("location:index.php?com=comment&act=list");
			return;

			}
		require_once "view/comment/list_comment.php";
		break;
	
	default:
		# code...
		break;
}

?>