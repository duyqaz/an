<div class="row mb content mgl ">
    <div class="row">
        <div class="row font_title">
            <h1>DANH SÁCH LOẠI HÀNG HÓA</h1>
        </div>
        <div class="row form_content ">
            <form action="#" method="POST">
                <div class="row mb10 formds_loai">
                    <table>
                        <tr>
                            <th></th>
                            <th>MÃ LOẠI</th>
                            <th>TÊN LOẠI</th>
                            <th></th>
                        </tr>
                        <?php
                        foreach ($listdanhmuc as $danhmuc) {
                            extract($danhmuc);
                            $suadm = "index.php?act=suadm&id=" . $id_dm;
                            $xoadm = "index.php?act=xoadm&id=" . $id_dm;

                            echo '<tr>
                <td></td>
                <td>' . $id_dm . '</td>
                <td>' . $name_dm . '</td>
                <td>  
                <a href="' . $suadm . '"><input type="button" value="Sửa"></a>
                <a href="' . $xoadm . '"><input type="button" value="Xoá"></a>
                
            </tr>';
                        }
                        ?>

                        <!-- <tr>
                <td><input type="checkbox" name="" id=""></td>
                <td>001</td>
                <td>Đồng hồ</td>
                <td><input type="button" value="Sửa">   <input type="button" value="Xóa"></td>
            </tr>
            <tr>
                <td><input type="checkbox" name="" id=""></td>
                <td>001</td>
                <td>Đồng hồ</td>
                <td><input type="button" value="Sửa">   <input type="button" value="Xóa"></td>
            </tr>
            <tr>
                <td><input type="checkbox" name="" id=""></td>
                <td>001</td>
                <td>Đồng hồ</td>
                <td><input type="button" value="Sửa">   <input type="button" value="Xóa"></td>
            </tr>
            <tr>
                <td><input type="checkbox" name="" id=""></td>
                <td>001</td>
                <td>Đồng hồ</td>
                <td><input type="button" value="Sửa">   <input type="button" value="Xóa"></td>
            </tr>
            -->

                    </table>
                </div>
                <div class="row mb10 ">
                    

                    <a href="index.php?act=adddm"> <input class="mr20" type="button" value="NHẬP THÊM"></a>
                </div>
            </form>
        </div>
    </div>




</div>
</div>
</div>
</header>
</div>