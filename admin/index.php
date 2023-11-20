<?php
include "../model/danhmuc.php";
include "../model/pdo.php";
include "../model/sanpham.php";
include "../model/taikhoan.php";

include "header.php";
// controller

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {

            /* CONTROLLER SẢN PHẨM  */

        case 'addsp':
            // KIểm tra xem người dùng có click vào nut add hay k
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $iddm = $_POST['iddm'];
                $name_sp = $_POST['name_sp'];
                $price = $_POST['price'];
                $mota = $_POST['mota'];
                $image = $_FILES['image']['name'];
                $target_dir = "../images/";
                $target_file = $target_dir . basename($_FILES["image"]["name"]);
                if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }

                insert_sanpham($name_sp, $price, $mota, $image,  $iddm);
                $thongbao = "Thêm thành công";
            }
            $listdanhmuc = loadall_danhmuc();

            include "../admin/sanpham/add.php";
            break;

        case 'listsp':
            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $kyw = $_POST['kyw'];
                $iddm = $_POST['iddm'];
            } else {
                $kyw = '';
                $iddm = 0;
            }
            $listdanhmuc = loadall_danhmuc();
            $listsp = loadall_sanpham($kyw, $iddm);
            include "../admin/sanpham/list.php";


            break;


        case 'xoasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_sanpham($_GET['id']);
            }
            $listsp = loadall_sanpham("", 0);
            include "sanpham/listsp.php";
            break;
        case 'suasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {

                $listsanpham = loadone_sanpham($_GET['id']);
            }
            // $listdm = loadall_danhmuc();
            include "sanpham/updatesp.php";
            break;

        case 'updatesp':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST['id'];
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $price = $_POST['price'];
                $mota = $_POST['mota'];
                $image = $_FILES['image']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["image"]["name"]);
                if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                update_sanpham($id, $iddm, $tensp, $price, $mota, $image);
                $thongbao = "Cập nhậtthành công";
            }
            // $listdm = loadall_danhmuc();
            $listsanpham = loadall_sanpham("", 0);
            include "sanpham/listsp.php";
            break;
            // danh mục
        case 'adddm':
            //Kiểm tra người dùng có click vào add hay không
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tenloai = $_POST['tenloai'];
                insert_danhmuc($tenloai);
                $thongbao = "bạn đã nhập thành công";
            }
            include "../admin/danhmuc/add.php";
            break;
        case 'listdm':
            $listdanhmuc = loadall_danhmuc();

            include "danhmuc/list.php";
            break;

        case 'xoadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $sql = "delete from danh_muc where id=" . $_GET['id'];
                pdo_execute($sql);
            }

            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;
        case 'suadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $sql = "select * from danh_muc where id=" . $_GET['id'];
                $dm = loadone_danhmuc($_GET['id']);
            }

            include "danhmuc/update.php";
            break;
        case 'updatedm':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $tenloai = $_POST['tenloai'];
                $iddm = $_POST['id'];
                update_danhmuc($iddm, $tenloai);
                $thongbao = "bạn đã cập nhập thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;
        case 'dskh':
            $list_taikhoan = loadall_taikhoan();
            include "taikhoan/list.php";
            break;



        default:
            include "home.php";
            break;
    }
} else {

    include "home.php";
}






include "footer.php";
