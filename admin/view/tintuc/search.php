
 <div class="container">
                          <h2>Quản lí tin tức</h2>
                            <nav aria-label="breadcrumb">
                              <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Quản lí</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Tất cả</li>
                              </ol>
                            </nav>
                            <div class="row">
                              <div class="col-sm-2">
                               <a href="index.php?com=tintuc&act=add"><button type="button" class="btn btn-primary">Thêm</button></a>
                               <a href="index.php?com=tintuc&act=list"><button type="button" class="btn">Thoát</button></a>
                               </div>

                               <form class="col-sm-4" method="GET" action="">
                                <div class="input-group ">
                                  <input type="hidden" name="com" value="tintuc">
                                  <input type="text" class="form-control" placeholder="Search" name="key">
                                  <div class="input-group-btn">
                                    <button class="btn btn-default" name="search" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                                  </div>
                                  <input type="hidden" name="act" value="search">
                                </div>
                                </form>
                            </div>

         
                          <table class="table table-striped" style="margin-top: 30px">
                            <thead>
                              <tr>
                                <th>Mã ID</th>
                                <th>Thể loại</th>
                                <th>Tiêu đề</th>
                                <th>Hình ảnh</th>
                                <th>Tóm tắt</th>
                                <th>Đặc biệt</th>
                                <th>Sửa</th>
                                <th>Xóa</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php foreach($data as $n): ?>
                              <tr>
                                <td><?=$n->idNews?></td>
                                <td><?=$n->name?></td>
                                <td><?=$n->title?></td>
                                <td><img width="50px" src="../public/images/<?=$n->img?>"></td>
                                <td><?=$n->ndesc?></td>
                                <td>
                                  <?php if($n->status == 1):?> 
                                  <input type="checkbox" checked="checked">
                                  <?php else: ?>
                                  <input type="checkbox">
                                  <?php endif ?>
                                
                                  
                                </td>
                                <td><a href="index.php?com=tintuc&act=edit&id=<?=$n->idNews?>"><img src="../public/images/iconedit.png" width="20px"></a></td>
                                <td><a onclick="return confirm('Bạn thật sự muốn xóa không?')" href="index.php?com=tintuc&act=delete&id=<?=$n->idNews?>"><img src="../public/images/icondel.png" width="20px"></a></td>
                              </tr>
                            <?php endforeach ?>

                            </tbody>
                          </table>
                          <?php if(isset($mes))  echo $mes ?>
                        </div>