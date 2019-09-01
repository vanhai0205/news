
<?php

require_once "controller/tintucController.php";
$controll = new tintucController();
if(isset($_POST['dangky'])){
  $error = array();
  if(empty($_POST['name'])) $error[]='name'; else $name = $_POST['name'];
  if(empty($_POST['mail'])) $error[]='mail'; else $mail = $_POST['mail'];
  if(empty($_POST['acc'])) $error[]='acc'; else $acc = $_POST['acc'];
  if(empty($_POST['pass'])) $error[]='pass'; else $pass = $_POST['pass']; 
	if(empty($_POST['rpass'])) $error[]='rpass'; else $rpass = $_POST['rpass']; 
  if(empty($error)){
    if($pass == $rpass){
      $sign = $controll->signUp($name,$mail,$acc,$pass);
    }
    else $mess = "Pass không giống nhau";
  }
  else $mess = "Bạn cần điền đủ thông tin";
	
}

if(isset($_POST['dangnhap'])){
	$acc = $_POST['acc'];
	$pass = $_POST['pass'];
	$login = $controll->logIn($acc,$pass);
}


?>
<style>


/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}
.dangky{
background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 20%;
  opacity: 0.9;
}
.dangnhap{
background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 20%;
  opacity: 0.9;
}
.com{
	background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 20%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to containerc elements */
.containerc {
  padding: 16px;
}

/* The modooo (background) */
.modooo {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: #474e5d;
  padding-top: 50px;
}

/* modooo Content/Box */
.modooo-content {
  background-color: #fefefe;
  margin: 5px auto 15px auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 60%; /* Could be more or less, depending on screen size */
}
.modoo-content {
  background-color: #fefefe;
  margin-right:  auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 60%; /* Could be more or less, depending on screen size */
}
/* Style the horizontal ruler */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
 
/* The Close Button (x) */
.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
<div class="comment-form">
                            <h4>Bình Luận</h4>
	

                            <form method="Post">
                                <div class="form-group" align="right">
                                    <textarea  class="form-control mb-10" rows="5" name="txt" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
                                </div>
                                <button  type="submit" name="binhluan" class="com">Bình luận</button> 
                            </form>
                        </div>
                        <div class="">
                        	<button onclick="document.getElementById('id01').style.display='block'" type="submit" name="dangnhap" class="dangnhap">Đăng nhập</button>
                        	<button onclick="document.getElementById('id02').style.display='block'" type="submit" name="dangky" class="dangky">Đăng ký</button>
                        </div>


                    <div id="id01" class="modooo">
                      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close modooo">&times;</span>
                      <form method="POST" class="modooo-content">
                        <div class="containerc">
                          <h1>Đăng nhập</h1>
                          <p>Đăng nhập bạn có thể bình luận</p>
                          <hr>
                          <label for="acc"><b>Tên tài khoản</b></label>
                          <input type="text" placeholder="Enter Email" name="acc" required>

                          <label for="pass"><b>Mật khẩu</b></label>
                          <input type="password" placeholder="Enter Password" name="pass" required>

                          <div class="clearfix">
                            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Hủy</button>
                            <button type="submit" name="dangnhap" class="signupbtn">Đăng nhập</button>
                          </div>
                        </div>
                      </form>

                  	

                  	  </div>

                  	   <div id="id02" class="modooo">
                      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close modooo">&times;</span>
                      <form method="POST" class="modooo-content">
                        <div class="containerc">
                          <h1>Đăng ký</h1>
                          <p>Tạo tài khoản người dùng mới</p>
                          <?php if(isset($mess)) echo $mess; ?>
                          <hr>
                          <label for="name"><b>Họ và tên</b></label>
                          <input type="text" placeholder="Enter Email" name="name" required>

                          <label for="mail"><b>Mail</b></label>
                          <input type="text" placeholder="Enter Password" name="mail" required>

                          <label for="acc"><b>Tên tài khoản</b></label>
                          <input type="text" placeholder="Enter Password" name="acc" required>

                          <label for="psw"><b>Mật khẩu</b></label>
                          <input type="password" placeholder="Enter Password" name="pass" required>

                          <label for="psw"><b>Nhập lại mật khẩu</b></label>
                          <input type="password" placeholder="Enter Password" name="rpass" required>

                          <div class="clearfix">
                            <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Hủy</button>
                            <button type="submit" name="dangky" class="signupbtn">Đăng ký</button>
                          </div>
                        </div>
                      </form>

                  	

                  	  </div>



                    </div>


<script>
// Get the modooo
var modooo = document.getElementById('id01');


// When the user clicks anywhere outside of the modooo, close it
window.onclick = function(event) {
  if (event.target == modooo) {
    modooo.style.display = "none";
  }
}

var modoo = document.getElementById('id02');


// When the user clicks anywhere outside of the modooo, close it
window.onclick = function(event) {
  if (event.target == modoo) {
    modoo.style.display = "none";
  }
}


</script>