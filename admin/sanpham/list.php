<div class="row mb content mgl ">
    <div class="row">
        <div class="row form_title ">
            <h1>QUẢN LÝ Sản Phẩm</h1>
        </div>
        <form action="index.php?act=listsp" method="post">
            <input type="text" name="kyw">
            <select name="iddm" id="">
                <option value="0" selected>Tất Cả</option>
                <?php
                foreach ($listdm as $danhmuc) {
                    extract($danhmuc);
                    echo ' <option value="' . $id_dm . '">' . $name_dm . '</option> ';
                }
                ?>

            </select>
            <input type="submit" name="listok" value="Go">
        </form>
        <div class="row form_content ">
            <div class="row mb20 from_loai " >

                <table>
                    <tr>
                        <th></th>
                        <th>Mã Sản Phẩm</th>
                        <th>Tên Sản Phẩm</th>
                        <th>Ảnh Sản Phẩm</th>
                        <th>Giá</th>

                        <th></th>
                    </tr>
                    <?php
                    foreach ($listsp as $sanpham) {
                        extract($sanpham);
                        $suasp = "index.php?act=suasp&id=" . $id_sp;
                        $xoasp = "index.php?act=xoasp&id=" . $id_sp;
                        $hinhpath = "../images/" . $img;
                        if (is_file($hinhpath)) {
                            $image = "<img src='" . $hinhpath . "' height='80'>";
                        } else {
                            $image = "no photo";
                        }
                        echo '
                                    <tr>
                                        <td><input type="checkbox"></td>
                                        <td>' . $id_sp . '</td>
                                        <td>' . $name_sp . '</td>
                                        <td style="height: 80px; width: 80px;" >' . $image . '</td>
                                        <td>' . $price . '</td>
                                      
                                        <td><a href="' . $suasp . '"><input type="button" value="Sửa"></a>  <a href="' . $xoasp . '"><input type="button" value="Xóa"></a>   </td>
                                    </tr
                                ';
                    }

                    ?>


                </table>
            </div>

            <div class="row mb20 " style="display: flex;">
               
                <a href="index.php?act=addsp"><input type="button" value="Nhập Thêm"></a>
            </div>


        </div>
    </div>
</div>
</header>
</div>