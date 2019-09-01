<?php 
session_start();
ob_start();
require_once "controller/tintucController.php";
$controll = new tintucController;
$c = $controll->content();
$content = $c['content'];
$cmt = $c['comment'];

$d = $controll->index();
$viewc = $d['view'];
$oneview = $d['oneview'];

if(isset($_POST['binhluan'])){
    $txt = $_POST['txt'];
    $idtintuc = $content->idTin;

    $comment = $controll->comment($idtintuc,$txt); 
}

?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="<?=$content->desc_seo?>"/>
        <meta name="keywords" content="<?=$content->key_seo?>"/>
        <link rel="icon" href="public/force/img/favicon.png" type="image/png">
        <title><?php if($content->title_seo == '') echo $content->title; else echo $content->title_seo; ?></title>
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

        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
                <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
                <div class="container">
                    <div class="banner_content text-center">
                        <h2><?=$content->name?></h2>
                        <div class="page_link">
                            <a href="index.html">Trang chủ</a>
                            <a href="<?=$content->titleko?>"><?=$content->title?></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

                <section class="news_area single-post-area p_100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="main_blog_details">
                            <a href="#"><h4><?=$content->title?></h4></a>
                            <div class="user_details">
                                <div class="float-left">
                                    <a href="<?=$content->nameko?>"><?=$content->name?></a>
                                </div>
                                <div class="float-right">
                                    <div class="media">
                                        <div class="media-body">

                                            <p><?=$content->date?></p>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <strong><?=$content->ndesc?></strong>
                            <p><?=$content->content?></p>
                            <div class="news_d_footer">
                                <a class="justify-content-center ml-auto" href="#"><i class="lnr lnr lnr-bubble"></i><?=count($cmt)?> Bình luận</a>
                                <div class="news_socail ml-auto">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-youtube-play"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-rss"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="comments-area">
                            <h4><?=count($cmt)?> Bình luận</h4>
                            <?php foreach($cmt as $cm): ?>
                            <div class="comment-list">
                                <div class="single-comment justify-content-between d-flex">
                                    
                                    <div class="user justify-content-between d-flex">
                                        <div class="thumb">
                                            <img src="upload/avatar.jpg" width="80px" alt="">
                                        </div>
                                        <div class="desc">
                                            <h5><a href="#"><?=$cm->name?></a></h5>
                                            <b><?php if($cm->status == 1) echo "admin"; else echo ""; ?></b>
                                            <p class="date"><?=$cm->date?> </p>
                                            <p class="comment">
                                                <?=$cm->content?>
                                            </p>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div> 
                            <?php endforeach ?>                                                              
                        </div>
                        <?php if(isset($_SESSION['error'])) echo $_SESSION['error'];  ?>
                        <?php if(isset($_SESSION['success'])) echo $_SESSION['success'];  ?>
                        <?php require_once "view/comment.php" ?>
            
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
                                    <?php foreach($viewc as $view): ?>
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

        </section>

            <?php ob_end_flush(); require_once "view/header.php"; ?>

