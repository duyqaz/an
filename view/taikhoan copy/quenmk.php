<div class=" row mb ">
    <div class=" box_left mr ">
        <div class="row mb ">
            <div class="box_title">Quên Mật Khẩu</div>
            <div class="box_content row form_account">
                <form action="index.php?act=quenmk" method="post">
                   
                    <div class=" row mb10 ">
                        Email
                        <input type="email" name="email">
                    </div>
                    
                    <input type="reset" value="Nhập Lại">
                    <input type="submit" value="Gửi" name="gui">
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