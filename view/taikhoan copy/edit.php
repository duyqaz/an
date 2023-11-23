<div class=" row mb ">
    <div class=" box_left mr ">
        <div class="row mb ">
            <div class="box_title">Đăng Ký</div>
            <div class="box_content row form_account">
                <?php
                if (isset($_SESSION['user']) && (is_array($_SESSION['user']))) {
                    extract($_SESSION['user']);

                }

                ?>
                <form action="index.php?act=edit" method="post">
                    <div class=" row mb10 ">
                        Tên người dùng
                        <input type="text" name="user" value="<?=$user?>">
                    </div>
                    <div class=" row mb10 ">
                        Email
                        <input type="email" name="email" value="<?=$email?>">
                    </div>
                    <div class=" row mb10 ">
                        Mật Khẩu
                        <input type="password" name="pass" value="<?=$pass?>">
                    </div>
                    <div class=" row mb10 ">
                        Địa chỉ
                        <input type="text" name="address" value="<?=$address?>">
                    </div>
                    <div class=" row mb10 ">
                        Điện Thoại
                        <input type="text" name="phone" value="<?=$phone?>">
                    </div>
                    <input type="hidden" name="id" value="<?=$id?>">
                    <input type="reset" value="Nhập Lại">
                    <input type="submit" value="Cập Nhật" name="capnhat">
                </form>
                <h2 class="Thongbao">
                    <?php
                    if (isset($thongbao) && ($thongbao != "")) {
                        echo $thongbao;
                    }
                    ?>
                </h2>


            </div>
        </div>


    </div>
    <div class=" box_right ">
        <?php
        include '../DuAnMau/view/boxrght.php';
        ?>

    </div>

</div>