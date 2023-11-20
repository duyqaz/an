<?php
if (is_array($listsanpham)) {
    extract($listsanpham);
}
$hinhpath = "../upload/" . $img;
if (is_file($hinhpath)) {
    $image = "<img src='" . $hinhpath . "' height='80'>";
} else {
    $image = "no photo";
}
?>


<div class="row">
    <div class="row form_title ">
        <h1> Cập Nhật Sản Phẩm</h1>
    </div>
    <div class="row form_content ">
        <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
            <div class="row mb20 ">

                <select name="iddm" id="">
                    <option value="0" selected>Tất Cả</option>
                    <?php echo $danhmuc['id_dm'] ?>
                    <?php
                    foreach ($listdm as $danhmuc) {
                        if ($iddm == $danhmuc['id']) {
                            echo '<option value=" ' . $danhmuc['id_dm'] . '" selected   >' . $danhmuc['$name_dm'] . '</option>';
                        } else {
                            echo '<option value=" ' . $danhmuc['id_dm'] . '">' . $danhmuc['$name_dm'] . '</option>';
                        };
                    }
                    ?>

                </select>

            </div>
            <div class="row mb20 ">

                Tên Sản Phẩm <br>
                <input type="text" name="tensp" value="<?= $name_sp ?>">
            </div>
            <div class="row mb20 ">
                Giá <br>
                <input type="text" name="price" value="<?= $price ?>">
            </div>
            <div class="row mb20 ">
                Ảnh Sản Phẩm <br>
                <input type="file" name="image"><?= $image ?>
            </div>
            <div class="row mb20 ">
                Mô Tả <br>
                <textarea name="mota" id="" cols="30" rows="10"> <?= $mota ?></textarea>
            </div>

            <div class="row mb20 ">
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <input type="submit" name="capnhat" value="Cập Nhật">
                <input type="reset" value="Nhập Lại">
                <a href="index.php?act=listsp"><input type="button" value="Danh Sách"></a>
            </div>
            <?php
            if (isset($thongbao) && $thongbao != "")
                echo $thongbao
            ?>


        </form>
    </div>

</div>
</div>
</header>
</div>