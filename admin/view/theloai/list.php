
 <div class="container">
  <h2>Quản lí thể loại tin</h2>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Quản lí</a></li>
        <li class="breadcrumb-item active" aria-current="page">Tất cả</li>
      </ol>
    </nav>
       <a href="index.php?com=theloai&act=add"><button type="button" class="btn btn-primary">Thêm</button></a>
     <table class="table table-striped" style="margin-top: 30px">
        <thead>
          <tr>
            <th>Mã</th>
            <th>Tên thể loại</th>
            <th>tên không dấu</th>
            <th>Sửa</th>
            <th>Xóa</th>
            
          </tr>
        </thead>
        <tbody>
        	<?php foreach($tbc as $tb): ?>
          <tr>
            <td><?=$tb->id?></td>
            <td><?=$tb->name?></td>
            <td><?=$tb->nameko?></td>
            <td><a href="index.php?com=theloai&act=edit&id=<?=$tb->id?>"><img src="../public/images/iconedit.png" width="20px"></a></td>
            <td><a onclick="return confirm('Bạn thật sự muốn xóa không?')" href="index.php?com=theloai&act=delete&id=<?=$tb->id?>"><img src="../public/images/icondel.png" width="20px"></a></td>
          </tr>
      <?php endforeach ?>

        </tbody>
      </table>


</div>
