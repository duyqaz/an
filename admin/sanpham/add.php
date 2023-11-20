<div class="row mb content mgl ">
  <div class="row">
    <div class="row form_title ">
      <h1> Thêm mới Sản Phẩm</h1>
    </div>
    <div class="row form_content ">
      <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
        <div class="row mb20 ">

          <select name="iddm" id="">
            <?php
            foreach ($listdanhmuc as $danhmuc) {
              extract($danhmuc);
              echo ' <option value="' . $id_dm . '">' . $name_dm . '</option> ';
            }
            ?>

          </select>
        </div>
        <div class="row mb20 ">
          Tên Sản Phẩm <br>
          <input type="text" name="name_sp">
        </div>
        <div class="row mb20 ">
          Giá <br>
          <input type="text" name="price">
        </div>
        <div class="row mb20 ">
          Ảnh Sản Phẩm <br>
          <input type="file" name="image">
        </div>
        <div class="row mb20 ">
          Mô Tả <br>
          <textarea name="mota" id="" cols="30" rows="10"></textarea>
        </div>

        <div class="row mb20 ">
          <input type="submit" name="themmoi" value="Thêm Mới">
          <input type="reset" value="Nhập Lại">
          <a href="index.php?act=listsp"><input  style="width: 100% ;" name="listok" type="button" value="Danh Sách "></a>
        </div>
        <?php
        if (isset($thongbao) && $thongbao != "")
          echo $thongbao
        ?>


      </form>
    </div>

  </div>
</div>
</div>
</header>
</div>