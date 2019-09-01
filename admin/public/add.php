<?php require_once "view/header.php" ?>


            <div class="container">
              <h2>Thêm dữ liệu</h2>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Quản lí</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tất cả</li>
                  </ol>
                </nav>
                <a href="index.php"><button type="button" class="btn">Thoát</button></a>
                <div style="margin-top:50px">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#home">Thông tin chung</a></li>
                        <li><a data-toggle="tab" href="#menu1">Thông tin</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="home" class="tab-pane fade in active">
                          <h3>Nhập dữ liệu</h3>
                            <form class="form-horizontal" action="">
                              <div class="form-group">
                                <label class="control-label col-sm-2" for="sel1">Chọn thể loại</label>
                                <div class="col-sm-10">
                                  <select class="form-control" id="sel1">
                                    <option>Chọn thể loại</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                  </select>
                                </div>
                              </div>  
                              <div class="form-group">
                                <label class="control-label col-sm-2" for="file">Tải hình ảnh:</label>
                                <div class="col-sm-10">
                                  <input type="file" class="form-control" id="file">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-sm-2" for="title">Title:</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="title">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-sm-2" for="key">Keyword:</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="key">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-sm-2" for="desc">Description:</label>
                                <div class="col-sm-10">
                                  <textarea class="form-control" id="desc"></textarea>
                                </div>
                              </div>
                              <div class="form-group">
                                  <label class="control-label col-sm-2" for="check">Tin đặc biệt:</label>
                                  <div class="col-sm-10">
                                    <input id="check" type="checkbox" value="">
                                  </div>
                              </div>
                              
                              <div class="form-group"> 
                                <div class="col-sm-offset-2 col-sm-10">
                                  <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                              </div>
                            </form>
                        </div>
                        <div id="menu1" class="tab-pane fade">
                          <h3>Nhập dữ liệu</h3>
                            <form class="form-horizontal" action="">
                              <div class="form-group">
                                <label class="control-label col-sm-2" for="title">Tiêu đề:</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="title">
                                </div>
                              </div>
                              
                              <div class="form-group">
                                <label class="control-label col-sm-2" for="desc">Mô tả ngắn:</label>
                                <div class="col-sm-10">
                                  <textarea class="form-control" id="desc"></textarea>
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-sm-2" for="desc">Nội dung chính:</label>
                                <div class="col-sm-10">
                                  <textarea class="form-control" id="desc"></textarea>
                                </div>
                              </div>

                              <div class="form-group"> 
                                <div class="col-sm-offset-2 col-sm-10">
                                  <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                              </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        
<?php require_once "view/footer.php" ?>