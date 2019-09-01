

 <div class="container">
  <h2>Quản lí thể comment</h2>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Quản lí</a></li>
        <li class="breadcrumb-item active" aria-current="page">Tất cả</li>
      </ol>
    </nav>
     <table class="table table-striped" style="margin-top: 30px">
        <thead>
          <tr>
            <th>Mã</th>
            <th>Nội dung</th>
            <th>Ngày</th>
            <th>Xóa</th>   
          </tr>
        </thead>
        <tbody>
        	<?php foreach($data as $tb): ?>
          <tr>
            <td><?=$tb->id?></td>
            <td><?=$tb->content?></td>
            <td><?=$tb->date?></td>
            <td><a onclick="return confirm('Bạn thật sự muốn xóa không?')" href="index.php?com=comment&act=delete&id=<?=$tb->id?>"><img src="../public/images/icondel.png" width="20px"></a></td>
          </tr>
      <?php endforeach ?>

        </tbody>
      </table>

</div>