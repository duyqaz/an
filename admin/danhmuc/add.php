<div class="row mb content mgl ">
  <div class="row">
    <div class="row font_title">
      <h1>THÊM MỚI LOẠI HÀNG HÓA</h1>
    </div>
    <div class="row form_content ">
      <form action="index.php?act=adddm" method="POST">
        <div class="row mb10 form_content_container">
          <label> Mã loại </label> <br>
          <input type="text" name="maloai" placeholder="nhập vào mã loại" disabled>
        </div>
        <div class="row mb10">
          <label>Tên loại </label> <br>
          <input type="text" name="tenloai" placeholder="nhập vào tên" required>
        </div>
        <div class="row mb10 ">
          <input class="mr20" type="submit" name="themmoi" value="THÊM MỚI">
          <input class="mr20" type="reset" value="NHẬP LẠI">

          <a href="index.php?act=listdm"><input class="mr20" type="button" value="DANH SÁCH"></a>
        </div>
        <?php
        if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
        ?>
      </form>
    </div>
  </div>
</div>
</div>
</header>
</div>