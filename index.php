
<?php 
require_once "controller/tintucController.php";


$controll = new tintucController();
$c = $controll->index();
$newsDB = $c['newsdb'];
$new = $c['new'];
$view = $c['view'];
$oneview = $c['oneview'];
$slide = $c['slide'];
$random = $c['random'];
$tt = $c['tt'];
$dl = $c['dl'];
$kh = $c['kh'];
$ch = $c['cauhinh'];






?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="<?=$ch->descseo?>"/>
        <meta name="keywords" content="<?=$ch->keyseo?>"/>
        <link rel="icon" href="upload/<?=$ch->icon?>" type="image/png">
        <title><?=$ch->ten?></title>
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
        <section class="home_banner_area">
            <div class="banner_inner d-flex align-items-center">
				<div class="container">
					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner">
							<?php for($i = 0;$i<count($slide);$i++): ?>
								<?php if($i == 0): ?>
							<div class="carousel-item active">
								<div class="banner_content text-center">
									<div class="date">
										<a class="gad_btn" href="<?=$slide[$i]->nameko?>"><?=$slide[$i]->name?></a>
										<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i><?=$slide[$i]->date?></a>
										<a href="#"><i class="fa fa-eye" aria-hidden="true"></i><?=$slide[$i]->view?></a>
									</div>
									<h3><?=$slide[$i]->title?></h3>
									<p><?=$slide[$i]->ndesc?></p>
								</div>
							</div>
								<?php else: ?>
							<div class="carousel-item">
								<div class="banner_content text-center">
									<div class="date">
										<a class="gad_btn" href="<?=$slide[$i]->nameko?>"><?=$slide[$i]->name?></a>
										<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i><?=$slide[$i]->date?></a>
										<a href="#"><i class="fa fa-eye" aria-hidden="true"></i><?=$slide[$i]->view?></a>
									</div>
									<h3><?=$slide[$i]->title?></h3>
									<p><?=$slide[$i]->ndesc?></p>
								</div>
							</div>
								<?php endif ?>
							<?php endfor ?>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Choice Area =================-->
        <section class="choice_area p_120">
        	<div class="container">
        		<div class="main_title2">
        			<h2>Tin đặc biệt</h2>
        		</div>
        		<div class="row choice_inner">
        			<?php foreach($newsDB as $news): ?>
        			<div class="col-lg-3 col-md-6">
        				<div class="choice_item">
        					<img class="img-fluid" src="upload/<?=$news->img?>" alt="">
        					<div class="choice_text">
        						<div class="date">
        							<a class="gad_btn" href="<?=$news->nameko?>"><?=$news->name?></a>
									<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i><?=$news->date?></a>
									<a href="#"><i class="fa fa-eye" aria-hidden="true"></i><?=$news->view?></a>
        						</div>
        						<a href="<?=$news->titleko?>.html"><h4><?=$news->title?></h4></a>
        						<p><?=$news->ndesc?></p>
        					</div>
        				</div>
        			</div>
        			<?php endforeach ?>
        		</div>
        	</div>
        </section>
        <!--================End Choice Area =================-->
        
        <!--================News Area =================-->
        <section class="news_area">
        	<div class="container">
        		<div class="row">
        			<div class="col-lg-8">
        				<div class="main_title2">
							<h2>Tin mới nhất</h2>
						</div>
        				<div class="latest_news">
        					<?php foreach($new as $news): ?>
        					<div class="media">
        						<div class="d-flex">
        							<img class="img-fluid" src="upload/<?=$news->img?>" width="150px"alt="">
        						</div>
        						<div class="media-body">
        							<div class="choice_text">
										<div class="date">
											<a class="gad_btn" href="<?=$news->nameko?>"><?=$news->name?></a>
											<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i><?=$news->date?></a>
											<a href="#"><i class="fa fa-eye" aria-hidden="true"></i><?=$news->view?></a>
										</div>
										<a href="<?=$news->titleko?>.html"><h4><?=$news->title?></h4></a>
										<p><?=$news->ndesc?></p>
									</div>
        						</div>
        					</div>
        					<?php endforeach ?>
        				</div>
        				<div class="wedding_megazin mt-100">
        					<div class="main_title2">
								<h2><?=$random[0]->name?></h2>
							</div>
        					<div class="row">
        						<?php for($i=0;$i<count($random);$i++): ?>
        							<?php if($i < 2): ?>
        						<div class="col-sm-6">
        							<div class="choice_item">
										<img class="img-fluid" src="upload/<?=$random[$i]->img?>" alt="">
										<div class="choice_text">
											<div class="date">
												<a class="gad_btn" href="<?=$random[$i]->nameko?>"><?=$random[$i]->name?></a>
												<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i><?=$random[$i]->date?></a>
												<a href="#"><i class="fa fa-eye" aria-hidden="true"></i><?=$random[$i]->view?></a>
											</div>
											<a href="<?=$random[$i]->titleko?>.html"><h4><?=$random[$i]->title?></h4></a>
											<p><?=$random[$i]->ndesc?></p>
										</div>
									</div>
        						</div>
        							<?php else: ?>

        						<div class="col-lg-3 col-sm-6">
        							<div class="choice_item small">
										<img class="img-fluid" src="upload/<?=$random[$i]->img?>" alt="">
										<div class="choice_text">
											<a href="<?=$random[$i]->titleko?>.html"><h4><?=$random[$i]->title?></h4></a>
											<div class="date">
												<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i><?=$random[$i]->date?></a>
												<a href="#"><i class="fa fa-eye" aria-hidden="true"></i><?=$random[$i]->view?></a>
											</div>
										</div>
									</div>
        						</div>
        							<?php endif ?>
        						<?php endfor ?>

        					</div>
        				</div>
        			</div>
        			<div class="col-lg-4">
        				<div class="right_sidebar">
        					<aside class="r_widgets news_widgets">
        						<div class="main_title2">
        							<h2>Tin xem nhiều</h2>
        						</div>
        						<div class="choice_item">
									<img class="img-fluid" src="upload/<?=$oneview->img?>" alt="">
									<div class="choice_text">
										<div class="date">
											<a class="gad_btn" href="<?=$oneview->nameko?>"><?=$oneview->name?></a>
											<a href="<?=$oneview->titleko?>.html"><i class="fa fa-calendar" aria-hidden="true"></i><?=$oneview->date?></a>
											<a href="#"><i class="fa fa-eye" aria-hidden="true"></i><?=$oneview->view?></a>
										</div>
										<a href="<?=$oneview->titleko?>.html"><h4><?=$oneview->title?></h4></a>
										<p><?=$oneview->ndesc?></p>
									</div>
								</div>
       							<div class="news_slider owl-carousel">
       								<?php foreach($view as $view): ?>
       								<div class="item">
       									<div class="choice_item">
											<img src="upload/<?=$view->img?>" alt="">
											<div class="choice_text">
												<a href="<?=$view->titleko?>.html"><h4><?=$view->title?></h4></a>
												<div class="date">
													<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i><?=$view->date?></a>
													<a href="#"><i class="fa fa-eye" aria-hidden="true"></i><?=$view->view?></a>
												</div>
											</div>
										</div>
       								</div>
       							<?php endforeach ?>
       							</div>
        					</aside>

        				</div>
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End News Area =================-->
        
        <!--================Product List Area =================-->
        <section class="product_list_area p_100">
        	<div class="container">
        		<div class="row product_list_inner">
        			<div class="col-lg-4">
        				<div class="main_title2">
        					<h2>Khoa học</h2>
        				</div>
        				<div class="product_list">
                            <?php foreach($kh as $news): ?>
        					<div class="media">
        						<div class="d-flex">
        							<img src="upload/<?=$news->img?>" width="80px" alt="">
        						</div>
        						<div class="media-body">
        							<div class="choice_text">
										<a href="<?=$news->titleko?>.html"><h4><?=$news->title?></h4></a>
										<div class="date">
											<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i><?=$news->date?></a>
											<a href="#"><i class="fa fa-eye" aria-hidden="true"></i><?=$news->view?></a>
										</div>
									</div>
        						</div>
        					</div>
                            <?php endforeach ?>

        				</div>
        			</div>
        			<div class="col-lg-4">
        				<div class="main_title2">
        					<h2>Du lịch</h2>
        				</div>
        				<div class="product_list">
                            <?php foreach($dl as $news): ?>
                            <div class="media">
                                <div class="d-flex">
                                    <img src="upload/<?=$news->img?>" width="80px" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="choice_text">
                                        <a href="<?=$news->titleko?>.html"><h4><?=$news->title?></h4></a>
                                        <div class="date">
                                            <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i><?=$news->date?></a>
                                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i><?=$news->view?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach ?>

                        </div>
        			</div>
        			<div class="col-lg-4">
        				<div class="main_title2">
        					<h2>Thể thao</h2>
        				</div>
        				<div class="product_list">
                            <?php foreach($tt as $news): ?>
                            <div class="media">
                                <div class="d-flex">
                                    <img src="upload/<?=$news->img?>" width="80px" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="choice_text">
                                        <a href="<?=$news->titleko?>.html"><h4><?=$news->title?></h4></a>
                                        <div class="date">
                                            <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i><?=$news->date?></a>
                                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i><?=$news->view?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach ?>

                        </div>
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End Product List Area =================-->
        
        <!--================ start footer Area  =================-->	
        
<?php require_once "view/footer.php" ?>   