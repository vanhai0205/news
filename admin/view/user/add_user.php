

<div class="container">
  <h2>Thêm dữ liệu</h2>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Quản lí</a></li>
        <li class="breadcrumb-item active" aria-current="page">Tất cả</li>
      </ol>
    </nav>
    <a href="index.php?com=user&act=list"><button type="button" class="btn">Thoát</button></a>
    <div style="margin-top:50px">

        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home">Thông tin chung</a></li>
        </ul>
			<div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                  <h3>Nhập dữ liệu</h3>
                    <form class="form-horizontal"  method="POST" >
                    	<div class="form-group">
                        <label class="control-label col-sm-2" for="title">Họ và tên</label>
                        <div class="col-sm-10">
                          <input name="name" type="text" class="form-control" id="title">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-sm-2" for="title">Mail:</label>
                        <div class="col-sm-10">
                          <input name="mail" type="text" class="form-control" id="title">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-sm-2" for="title">Tên đăng nhập</label>
                        <div class="col-sm-10">
                          <input name="acc" type="text" class="form-control" id="title">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-sm-2" for="title">Mật khẩu</label>
                        <div class="col-sm-10">
                          <input name="pass" type="text" class="form-control" id="title">
                        </div>
                      </div>
                      <div  class="form-group">
                        <label class="control-label col-sm-2" style="display: block">Phân quyền</label>
                        <div class="col-sm-10">
                        <label class="radio-inline"><input value="1" name="status" type="radio" >Admin</label>
                        <label class="radio-inline"><input value="0" name="status" type="radio" checked="checked">Đọc giả</label>
                        </div>
                      </div>


					  <div class="form-group"> 
                        <div class="col-sm-offset-2 col-sm-10">
                          <button name="add_user" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                      </div>
				</div>


</div>
</form>
</div>
</div>

