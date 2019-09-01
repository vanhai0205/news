 <div class="container">
                          <h2>Quản lí user</h2>
                            <nav aria-label="breadcrumb">
                              <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Quản lí</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Tất cả</li>
                              </ol>
                            </nav>

                               <a href="index.php?com=user&act=add"><button type="button" class="btn btn-primary">Thêm</button></a>
                               <?php if(isset($mess)) echo $mess; ?>

                                  <div style="margin-top:50px">

        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home">Thông tin đọc giả</a></li>
            <li><a data-toggle="tab" href="#menu1">Thông tin admin</a></li>
        </ul>
      <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                  <h3>Nhập dữ liệu</h3>
<table class="table table-striped" style="margin-top: 30px">
                            <thead>
                              <tr>
                                <th>Mã ID</th>
                                <th>Tên người dùng</th>
                                <th>Mail</th>
                                <th>Tên đăng nhập</th>
                                <th>Mật khẩu</th>
                                <th>Admin</th>
                                <th>Xóa</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php foreach($data as $n): ?>
                              <tr>
                                <td><?=$n->id?></td>
                                <td><?=$n->name?></td>
                                <td><?=$n->mail?></td>
                                <td><?=$n->acc?></td>
                                <td><?=$n->pass?></td>



                                <td><a href="index.php?com=user&act=list&id=<?=$n->id?>&status=1">Ủy quyền</a></td>
                                <td><a onclick="return confirm('Bạn thật sự muốn xóa không?')" href="index.php?com=user&act=delete&id=<?=$n->id?>"><img src="../public/images/icondel.png" width="20px"></a></td>
                              </tr>
                            <?php endforeach ?>
                            </tbody>
                          </table>

        </div>
        <div id="menu1" class="tab-pane fade">
          <h3>Nhập dữ liệu</h3>
                    <table class="table table-striped" style="margin-top: 30px">
                            <thead>
                              <tr>
                                <th>Mã ID</th>
                                <th>Tên người dùng</th>
                                <th>Mail</th>
                                <th>Tên đăng nhập</th>
                                <th>Mật khẩu</th>
                                <th>Sửa</th>
                                <th>Xóa</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php foreach($data1 as $n): ?>
                              <tr>
                                <td><?=$n->id?></td>
                                <td><?=$n->name?></td>
                                <td><?=$n->mail?></td>
                                <td><?=$n->acc?></td>
                                <td><?=$n->pass?></td>
                                <td><a href="index.php?com=user&act=edit&id=<?=$n->id?>"><img src="../public/images/iconedit.png" width="20px"></a></td>
                                <td><a onclick="return confirm('Bạn thật sự muốn xóa không?')" href="index.php?com=user&act=delete&id=<?=$n->id?>"><img src="../public/images/icondel.png" width="20px"></a></td>
                              </tr>
                            <?php endforeach ?>
                            </tbody>
                          </table>
                          
      </div>
  </div>

</div>
</div>

                          
                        </div>