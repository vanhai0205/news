<?php 
 
require_once "controller/tintucController.php";

$controll = new tintucController();
$c = $controll->type();
$menu = $c['menu'];
$d = $controll->index();
$ch = $d['cauhinh'];

?>

<style type="text/css">
        .notfound-search {
  position: relative;
  padding-right: 123px;
  max-width: 420px;
  width: 100%;
  margin: 30px auto 22px;
}

.notfound-search input {
  width: 100%;
  height: 40px;
  padding: 3px 15px;
  color: #222;
  font-size: 12px;
  background: #f8fafb;
  border: 1px solid rgba(34, 34, 34, 0.2);
  border-radius: 3px;
}

.notfound-search button {
  position: absolute;
  right: 60px;
  top: 0px;
  width: 60px;
  height: 40px;
  text-align: center;
  border: none;
  background: #ff1857;
  cursor: pointer;
  padding: 0;
  color: #fff;
  font-size: 18px;
  border-radius: 3px;
}

    </style>
    <body>
        
        <!--================Header Menu Area =================-->
                <header class="header_area">
            <div class="top_menu">
                <div class="container">
                    <div class="float-left">
                        <a href=""><?php
                            date_default_timezone_set('Asia/Ho_Chi_Minh');
                            $date = getdate();
                            
                            echo " Ngày ".$date['mday']." Tháng ".$date['mon']." Năm ".$date['year'];
                        ?></a>
                    </div>
                    <div class="float-right">
                        <ul class="list header_social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="logo_part">
                <div class="container">
                    <div class="float-left">
                        <a class="logo" href="trang-chu"><img src="upload/<?=$ch->logo?>" alt=""></a>
                    </div>
                    <div class="float-right">
                        <form method="POST" action="tim-kiem" class="notfound-search">
                            <input type="text" id="txt" name="txt" placeholder="Tìm kiếm">
                            <button type="submit" id="sm" name="sm"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="main_menu">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container">
                        <div class="container_inner">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <a class="navbar-brand logo_h" href="index.html"><img src="public/force/img/logo.png" alt=""></a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                                <ul class="nav navbar-nav menu_nav">
                                    <li class="nav-item active"><a class="nav-link" href="home">Trang chủ</a></li> 
                                    <?php foreach($menu as $c): ?>
                                    <li class="nav-item"><a class="nav-link" href="<?=$c->nameko?>"><?=$c->name?></a></li>
                                    <?php endforeach ?>
                                    <li class="nav-item"><a class="nav-link" href="lien-he">Liên hệ</a></li>
                                </ul>
<!--                                 <ul class="nav navbar-nav navbar-right ml-auto">
                                    <li class="nav-item"><a href="#" class="search"><i class="lnr lnr-magnifier"></i></a></li>
                                </ul> -->
                            </div> 
                        </div>
                    </div>
                </nav>
            </div>
        </header>