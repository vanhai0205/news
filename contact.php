<?php 
require_once "controller/tintucController.php";
$controll = new tintucController();
$c = $controll->contact();
$show = $c['show'];


function getNewsRandom(){
        $sql = "SELECT tt.*, tl.*,Sum(view) as tongview
                FROM tintuc as tt
                INNER JOIN theloai as tl 
                ON tt.idtype = tl.id
                Group by tl.name
                ORDER BY tongview desc 
                LIMIT 0,1

        ";
        return $this->getMoreRows($sql);
    }
?>
<!doctype html>
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
    	
<?php 
require_once "view/header.php";

?>
        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
						<h2>Liên hệ với chúng tôi</h2>
						<div class="page_link">
							<a href="trang-chu">Trang chủ</a>
							<a href="lien-he">Liên hệ</a>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Contact Area =================-->
        <section class="contact_area p_120">
            <div class="container">
                <?=$show->map ?>
                <div class="row" style="margin-top: 100px">
                    <div class="col-lg-3">
                        <div class="contact_info">
                            <div class="info_item">
                                <i class="lnr lnr-home"></i>
                                <h6>Địa chỉ</h6>
								<p><?=$show->diachi ?></p>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-phone-handset"></i>
                                <h6>Số điện thoại</h6>
								<p><?=$show->dienthoai ?></p>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-envelope"></i>
                                <h6>Email</h6>
                                <p><?=$show->email ?></p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <form class="row contact_form" method="post" id="contactForm" novalidate="novalidate">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Tên của bạn">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Địa chỉ Email">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Tiêu đề">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" name="message" id="message" rows="1" placeholder="Nội dung"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 text-right">
                                <button type="submit" value="submit" name="submit" class="btn submit_btn">Gửi Mail</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--================Contact Area =================-->

        <?php require_once "view/footer.php" ?>