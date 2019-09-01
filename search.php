<?php 
require_once "controller/tintucController.php";
$controll = new tintucController();
if(isset($_POST['sm'])){
	$key = $_POST['txt'];
	$s = $controll->search($key);
	if(!$s){
		$message = "Không tìm thấy kết quả";
	}
	
}

?>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="public/force/img/favicon.png" type="image/png">
        <title>Force Magazine</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="public/force/css/bootstrap.css">
        <link rel="stylesheet" href="public/force/vendors/linericon/style.css">
        <link rel="stylesheet" href="public/force/css/font-awesome.min.css">
        <link rel="stylesheet" href="public/force/vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="public/force/vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="public/force/vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="public/force/vendors/animate-css/animate.css">
        <link rel="stylesheet" href="public/force/vendors/jquery-ui/jquery-ui.css">
        <!-- main css -->
        <link rel="stylesheet" href="public/force/css/style.css">
        <link rel="stylesheet" href="public/force/css/responsive.css">
    </head>
    <?php require_once "view/header.php"; ?>
<section class="news_area p_100">
        	<div class="container">
        		<div class="row">
        			<div class="col-lg-12">
        				<div class="main_title2">
							<h2>
								<?php 
									if(isset($message)) echo $message; 
									else echo "Có ".count($s)." kết quả với từ khóa <spam style='color:red'>".$key."</spam>";
								?>
							</h2>
						</div>
       					<div class="latest_news">
       						<?php foreach($s as $search): ?>
        					<div class="media">
        						<div class="d-flex">
        							<img class="img-fluid" src="upload/<?=$search->img?>" width="200px" alt="">
        						</div>
        						<div class="media-body">
        							<div class="choice_text">
										<div class="date">
											<a class="gad_btn" href="<?=$search->nameko?>"><?=$search->name?></a>
											<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i><?=$search->date?></a>
											<a href="#"><i class="fa fa-eye" aria-hidden="true"></i><?=$search->view?></a>
										</div>
										<a href="<?=$search->titleko?>.html"><h4><?=$search->title?></h4></a>
										<p><?=$search->ndesc?></p>
									</div>
        						</div>
        					</div>
        				<?php endforeach ?>
        				</div>
        			</div>

        		</div>
        	</div>
        </section>
    <?php require_once "view/footer.php"; ?>

