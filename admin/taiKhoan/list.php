<div class="row mb content mgl ">
    <div class="row">
        <div class="row form_title ">
            <h1>Danh Sách Tài Khoản</h1>
        </div>
        <div class="row form_content ">
            <div class="row mb20 from_loai ">
                <table>
                    <tr>
                        <th></th>
                        <th>Mã Tài Khoản</th>
                        <th>Tên Người dùng</th>
                        <th>Mật Khẩu</th>
                        <th>Email</th>
                        <th>Địa chỉ</th>
                        <th>Điện Thoại</th>
                        <th>Vai Trò</th>
                        <th></th>
                    </tr>
                    <?php
                    foreach ($list_taikhoan as $kh) {
                        extract($kh);
                        $suatk = "index.php?act=edit" . $idtk;
                        $xoatk = "index.php?act=xoatk&id=" . $idtk;
                        echo '
                                    <tr>
                                        <td><input type="checkbox"></td>
                                        <td>' . $idtk . '</td>
                                        <td>' . $user . '</td>
                                        <td>' . $pass . '</td>
                                        <td>' . $email . '</td>
                                        <td>' . $address . '</td>  
                                        <td>' . $phone . '</td>
                                        <td>' . $role . '</td>
                                        <td><a href="' . $suatk . '"><input type="button" value="Sửa"></a>  <a href="' . $xoatk . '"><input type="button" value="Xóa"></a>   </td>
                                    </tr
                                ';
                    }

                    ?>


                </table>
            </div>

           

        </div>

    </div>
</div>
</header>
</div>