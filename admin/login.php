<?php session_start(); 
if(isset($_SESSION['uid'])){
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<style type="text/css">
	@use postcss-cssnext;
/* helpers/align.css */

.align {
  align-items: center;
  display: flex;
  justify-content: center;
}

/* helpers/grid.css */

:root {
  --gridMaxWidth: 24em;
  --gridWidth: 90%;
}

.grid {
  margin-left: auto;
  margin-right: auto;
  max-width: var(--gridMaxWidth);
  width: var(--gridWidth);
}

/* helpers/icon.css */

.icon {
  display: inline-block;
  height: 1.25em;
  line-height: 1.25em;
  margin-right: 0.625em;
  text-align: center;
  vertical-align: middle;
  width: 1.25em;
}

.icon--info {
  background-color: #e5e5e5;
  border-radius: 50%;
}

/* layout/base.css */

:root {
  --bodyBackgroundColor: #eaeaea;
  --bodyColor: #999;
  --bodyFontFamily: 'Helvetica', 'Arial';
  --bodyFontFamilyFallback: sans-serif;
  --bodyFontSize: 0.875rem;
  --bodyFontWeight: 400;
  --bodyLineHeight: 1.5;
}

*,
*::before,
*::after {
  box-sizing: inherit;
}

html {
  box-sizing: border-box;
  height: 100%;
}

body {
  background-color: var(--bodyBackgroundColor);
  font-family: var(--bodyFontFamily), var(--bodyFontFamilyFallback);
  font-size: var(--bodyFontSize);
  font-weight: var(--bodyFontWeight);
  line-height: var(--bodyLineHeight);
  margin: 0;
  min-height: 100%;
}

/* modules/anchor.css */

:root {
  --anchorColor: inherit;
  --anchorHoverColor: #1dabb8;
}

a {
  color: var(--anchorColor);
  text-decoration: none;
  transition: color 0.3s;
}

a:hover {
  color: var(--anchorHoverColor);
}

/* modules/form.css */

fieldset {
  border: none;
  margin: 0;
}

input {
  appearance: none;
  border: none;
  font: inherit;
  margin: 0;
  outline: none;
  padding: 0;
}

input[type='submit'] {
  cursor: pointer;
}

.form input[type='text'],
.form input[type='password'] {
  width: 100%;
}

/* modules/login.css */

:root {
  --loginBorderRadius: 0.25em;
  --loginHeaderBackgroundColor: #282830;

  --loginInputBorderRadius: 0.25em;
}

.login__header {
  background-color: var(--loginHeaderBackgroundColor);
  border-top-left-radius: var(--loginBorderRadius);
  border-top-right-radius: var(--loginBorderRadius);
  color: #fff;
  padding: 1.5em;
  text-align: center;
  text-transform: uppercase;
}

.login__title {
  font-size: 1rem;
  margin: 0;
}

.login__body {
  background-color: #fff;
  padding: 1.5em;
  position: relative;
}

.login__body::before {
  background-color: #fff;
  content: '';
  height: 0.5em;
  left: 50%;
  margin-left: -0.25em;
  margin-top: -0.25em;
  position: absolute;
  top: 0;
  transform: rotate(45deg);
  width: 0.5em;
}

.login input[type='text'],
.login input[type='password'] {
  border: 0.0625em solid #e5e5e5;
  padding: 1em 1.25em;
}

.login input[type='text'] {
  border-top-left-radius: var(--loginInputBorderRadius);
  border-top-right-radius: var(--loginInputBorderRadius);
}

.login input[type='password'] {
  border-bottom-left-radius: var(--loginInputBorderRadius);
  border-bottom-right-radius: var(--loginInputBorderRadius);
  border-top: 0;
}

.login input[type='submit'] {
  background-color: #1dabb8;
  border-radius: var(--loginInputBorderRadius);
  color: #fff;
  font-weight: 700;
  order: 1;
  padding: 0.75em 1.25em;
  transition: background-color 0.3s;
}

.login input[type='submit']:focus,
.login input[type='submit']:hover {
  background-color: #198d98;
}

.login__footer {
  align-items: center;
  background-color: #fff;
  border-bottom-left-radius: var(--loginBorderRadius);
  border-bottom-right-radius: var(--loginBorderRadius);
  display: flex;
  justify-content: space-between;
  padding-bottom: 1.5em;
  padding-left: 1.5em;
  padding-right: 1.5em;
}

.login__footer p {
  margin: 0;

}
.red{
	color:red;
}

</style>
<body class="align">

  <div class="grid">
    <?php 
    require_once "model/adminModel.php";
    
    if(isset($_POST['sm'])){
      $txtname = $_POST['txtname'];
      $txtpass = $_POST['txtpass'];
      $m = new adminModel();
    $data = $m->login($txtname,$txtpass);
    if($data){
      $_SESSION['uid']=$data->id;
      $_SESSION['taikhoan']=$txtname;
      header('location:index.php');
    }
    else{
      echo "Sai thông tin đăng nhập";
    }
    }



    ?>


    <form method="post" class="form login">
      <header class="login__header">
        <h3 class="login__title">Login</h3>
      </header>

      <div class="login__body">

        <div class="form__field">
          <input type="text" name="txtname" placeholder="Tên đăng nhập" required>

        </div>

        <div class="form__field">
          <input type="password" name="txtpass" placeholder="Mật khẩu" required>
        </div>

      </div>

      <footer class="login__footer">
        <input type="submit" name="sm" value="Login">

        <p><span class="icon icon--info">?</span><a href="#">Forgot Password</a></p>
      </footer>

    </form>

  </div>

</body>
</html>