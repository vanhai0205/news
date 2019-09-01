<?php 
require_once "controller/tintucController.php";
$controller = new tintucController();
$c = $controller->type();
$type = $c['type'];





$d = $controller->index();
$oneview = $d['oneview'];
$view = $d['view'];
?>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="public/force/img/favicon.png" type="image/png">
        <meta name="description" content=""/>
        <meta name="keywords" content=""/>
        <title>Thể loại</title>
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
        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
                <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
                <div class="container">
                    <div class="banner_content text-center">
                        <h2><?=$type[0]->name?></h2>
                        <div class="page_link">
                            <a href="trang-chu">Home</a>
                            <a href=""><?=$type[0]->name?></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        <!--================News Area =================-->
        <section class="news_area p_100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8" >
                        <div class="main_title2">
                            <h2></h2>
                        </div>
                        <div class="latest_news" >
                            <?php foreach($type as $t): ?>
                            <div class="media">
                                <div class="d-flex">
                                    <img class="img-fluid" src="upload/<?=$t->img?> " width="200px" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="choice_text">
                                        <div class="date">
                                            <a class="gad_btn" href="<?=$t->nameko?>"><?=$t->name?></a>
                                            <a href=""><i class="fa fa-calendar" aria-hidden="true"></i><?=$t->date?></a>
                                            <a href=""><i class="fa fa-eye" aria-hidden="true"></i><?=$t->view?></a>
                                        </div>
                                        <a href="<?=$t->titleko?>.html"><h4><?=$t->title?></h4></a>
                                        <p><?=$t->ndesc?></p>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach ?>

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

    <?php require_once "view/footer.php"; ?>