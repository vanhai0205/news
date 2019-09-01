<?php 
if(isset($_GET['act'])){
	$act = $_GET['act'];
}
else{
	$act ="";
}


switch ($act) {
	case 'list':
		$m = new adminModel();
    	$n = $m->selectNews();

    	if(isset($_GET['page'])) $page = $_GET['page']; else $page = 1;
    	$totalRow = count($n);
    	$display = 5;
    	$position = ($page - 1)*$display;
    	$totalPage = ceil($totalRow/$display);
    	$news = $m->selectNewsft($position,$display);



		require_once "view/tintuc/list_news.php";
		break;
	case 'add':
		$m = new adminModel();
    	$type = $m->select('theloai');



		if(isset($_POST['add_news'])){
			$idtype = $_POST['type'];
			
			$error = array();
	    		if(($_FILES['img']['type']!="image/png")
					&& ($_FILES['img']['type']!="image/gif")
					&& ($_FILES['img']['type']!="image/jpeg")
					&& ($_FILES['img']['type']!="image/jpg")
				){
					echo "File không đúng định dạng";
				}
				elseif($_FILES['img']['size'] > 1000000){
					echo "Ảnh phải nhỏ hơn 1MB";
				}
				elseif($_FILES['img']['size'] =""){
					echo "Bạn chọn phải chọn ảnh";
				}
				else{
					$files=$_FILES['img'];
					$img=$files['name'];
					$imgname = time()."-".$img;

					$link_img="../upload/".$imgname;
					move_uploaded_file($files['tmp_name'],"../upload/".$imgname);
				}

			if(empty($_POST['title'])) $error[]='title'; else $title = $_POST['title'];
			if(isset($title)){
	        $ko = convert_vi_to_en($title);
			$titleko = $ko;
			}
			if(empty($_POST['ndesc'])) $error[]='ndesc'; else $ndesc = $_POST['ndesc'];
			if(empty($_POST['content'])) $error[]='content'; else $content = $_POST['content'];				
			$status = $_POST['status'];
			$title_seo = $_POST['title_seo'];
			$desc_seo = $_POST['desc_seo'];
			$key_seo = $_POST['key_seo']; 
			if(empty($error)){
				$model = new adminModel();
				$post = $model->insertNews($idtype,$imgname,$title,$titleko,$ndesc,$content,$status,$title_seo,$desc_seo,$key_seo);
				if($post){
					header("location:index.php?com=tintuc&act=list");
					return;
				}
			}
			else{
				$mess = "Bạn cần điển đủ thông tin";
			}
			
	      }
		require_once "view/tintuc/add_news.php";
		break;
	case 'edit':
			if(isset($_GET['id'])){
    		$idNews = $_GET['id'];

    		$m = new adminModel();
    		$data = $m->selectOne("tintuc",$idNews);

    		if(isset($_POST['edit_type'])){
    			$error = array();
				if(empty($_POST['title'])) $error[]='title'; else $title = $_POST['title'];
				if(isset($title)){
		        $ko = convert_vi_to_en($title);
				$titleko = $ko;
				}
				if(empty($_POST['ndesc'])) $error[]='ndesc'; else $ndesc = $_POST['ndesc'];
				if(empty($_POST['content'])) $error[]='content'; else $content = $_POST['content'];		
				$status = $_POST['status'];
				$title_seo = $_POST['title_seo'];
				$desc_seo = $_POST['desc_seo'];
				$key_seo = $_POST['key_seo'];
				if(empty($error)){
					$d = $m->updateNews($title,$titleko,$ndesc,$content,$status,$title_seo,$desc_seo,$key_seo,$idNews);
					if($d){
						header("location:index.php?com=tintuc&act=list");
						return;
					}
				}
				else{
					$mess = "Bạn cần nhập đủ thông tin";
				}

				
    		}
    	}
    	require_once "view/tintuc/edit_news.php";
		break;

		case 'delete':
    	if(isset($_GET['id'])){
    		$id = $_GET['id'];

    		$m = new adminModel();
    		$data = $m->delete('tintuc',$id);
    		if($data){
    			header("location:index.php?com=tintuc&act=list");
    			return;
    		}
    		
    	}
    	else{
    			header("location:index.php?com=tintuc&act=list"); 
    			return;
    		}
      	break;
      	case 'search':
      	if(isset($_GET['key'])){
      		$key = $_GET['key'];

      		$m = new adminModel();
      		$data = $m->searchNews($key);

      		if(!$data){
      			$mes = "Không tìm thấy kết quả";
      		};
      	}
      		
      		require_once "view/tintuc/search.php";
      		break;
	
	default:
		# code...
		break;
}

?>