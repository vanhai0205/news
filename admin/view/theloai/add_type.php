

<div class="container">
  <h2>Thêm dữ liệu</h2>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Quản lí</a></li>
        <li class="breadcrumb-item active" aria-current="page">Tất cả</li>
      </ol>
    </nav>
    <a href="index.php?com=theloai&act=list"><button type="button" class="btn">Thoát</button></a>

    <p><?php if(isset($mess)) echo $mess; else echo ""; ?></p>
    <div style="margin-top:50px">

        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home">Thông tin chung</a></li>
            <li><a data-toggle="tab" href="#menu1">Thông tin</a></li>
        </ul>
			<div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                  <h3>Nhập dữ liệu</h3>
                    <form class="form-horizontal"  method="POST" >
                    	<div class="form-group">
                        <label class="control-label col-sm-2" for="title">Title:</label>
                        <div class="col-sm-10">
                          <input name="title_seo" type="text" class="form-control" id="title">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-sm-2" for="key">Keyword:</label>
                        <div class="col-sm-10">
                          <input name="key_seo" type="text" class="form-control" id="key">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-sm-2" for="desc">Description:</label>
                        <div class="col-sm-10">
                          <textarea rows="10" name="desc_seo" class="form-control" id="desc"></textarea>
                        </div>
                      </div>
					  <div class="form-group"> 
                        <div class="col-sm-offset-2 col-sm-10">
                          <button name="add_type" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                      </div>
				</div>
				<div id="menu1" class="tab-pane fade">
				  <h3>Nhập dữ liệu</h3>
                    <div class="form-group">
	                <label class="control-label col-sm-2" for="title">Tên thể loại</label>
	                <div class="col-sm-10">
	                  <input name="name" type="text" class="form-control" id="title">
	                </div>
	                </div>

				    <div class="form-group"> 
                    <div class="col-sm-offset-2 col-sm-10" style="margin-top:10px">
                      <button name="add_type" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    </div>
			</form>
			</div>
	</div>

</div>
</div>
</div>
