<div class="row mb">
     <div class="boxtrai mr">
        <div class="row mb">

            <div class="boxtitle">Giỏ Hàng</div>
            <div class="row boxcontent cart">
                <table>
                    <tr>
                        <th>Hình</th>
                        <th>Sản Phẩm</th>
                        <th>Đơn Giá </th>
                        <th>Số Lượng</th>
                        <th>Thành Tiền</th>
                        <th>Thao tác</th>
                    </tr>

                    <?php
                        $tong=0;
                        foreach ($_SESSION['mycart'] as $cart) {
                            $hinh=$img_path.$cart[2];
                            $ttien=$cart[3]*$cart[4];
                            $tong+=$ttien;
                            echo '<tr>
                                    <td><img src="'.$hinh.'" alt="" height="80px"></td>
                                    <td>'.$cart[1].'</td>
                                    <td>'.$cart[3].'</td>
                                    <td>'.$cart[4].'</td>
                                    <td>'.$ttien.'</td>
                                    <td><input type="button" value="xoa"></td>
                                </tr>';
                        }
                        echo'<tr>
                                <td colspan="4">Tổng đơn hàng</td>
                                <td>'.$tong.'</td>
                                <td></td>
                            </tr>';
                    ?>
                    <!-- <tr>
                        <td>1</td>
                        <td><img src="images/m1.jpg" alt="" height="80px"></td>
                        <td>Điện thoại</td>
                        <td>50</td>
                        <td>2</td>
                        <td>2000000 VNĐ</td>
                        <td><input type="button" value="xoa"></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><img src="images/m2.jpg" alt="" height="80px"></td>
                        <td>Điện thoại</td>
                        <td>50</td>
                        <td>1</td>
                        <td>2000000 VNĐ</td>
                        <td><input type="button" value="xoa"></td>
                    </tr> -->
                </table>
            </div>
        </div>
        <div class="row mb bill">
            <input type="submit" value="Đồng Ý Đặt Hàng"><a href="index.php?act=delcart"><input type="button" value="Xóa Giỏ Hàng"></a>
        </div>
     </div>
</div>