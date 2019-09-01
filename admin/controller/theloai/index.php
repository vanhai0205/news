
<?php 


  if(isset($_GET['act'])){
    $act = $_GET['act'];
  }
  else{
    $act = '';

  }

  switch ($act) {
    case 'add':
      if(isset($_POST['add_type'])){
        $error = array();
        if(empty($_POST['name'])) $error[]='name'; else $name = $_POST['name'];
      	if(isset($name)){
          $ko = convert_vi_to_en($name);
          $nameko = $ko;
        };
        
    		$title_seo = $_POST['title_seo'];
    		$desc_seo = $_POST['desc_seo'];
    		$key_seo = $_POST['key_seo']; 
        if(empty($error)){
      		$model = new adminModel();
      		$post = $model->insertType($name,$nameko,$title_seo,$desc_seo,$key_seo);
          header("location:index.php?com=theloai&act=list");
          return;
        }
        else $mess = "Cần điền đủ thông tin";
      }
      require_once "view/theloai/add_type.php";
      break;


    case 'edit':
    	if(isset($_GET['id'])){
    		$id = $_GET['id'];
    		$db = new adminModel;
    		$data = $db->selectOne("theloai",$id);

    		if(isset($_POST['edit_type'])){
    			$name = $_POST['name'];
  				$ko = convert_vi_to_en($name);
          $nameko = $ko;
  				$title_seo = $_POST['title_seo'];
  				$desc_seo = $_POST['desc_seo'];
  				$key_seo = $_POST['key_seo']; 

				$d = $db->updateType($name,$nameko,$title_seo,$desc_seo,$key_seo,$id);
				if($d){
					header("location:index.php?com=theloai&act=list");
					return;
				}
    		}
    	}
      require_once "view/theloai/edit_type.php";
      break;

    case 'delete':
    	if(isset($_GET['id'])){
    		$id = $_GET['id'];

    		$db = new adminModel();
    		$data = $db->delete('theloai',$id);
    		if($data){
    			header("location:index.php?com=theloai&act=list");
    			return;
    		}
    		
    	}
    	else{
    			header("location:index.php?com=theloai&act=list"); 
    			return;
    		}
      break;

    case 'list':
    	$m = new adminModel();
    	$tbc = $m->select('theloai');


      require_once "view/theloai/list.php";
      break;

    default:
      require_once "view/theloai/list.php";
      break;
    		
    
  }


?>
 