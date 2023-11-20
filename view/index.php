<?php
session_start();
include "../model/pdo.php";
include "../model/sanpham.php";
include "../model/danhmuc.php";
include "../model/taikhoan.php";
include "../view/header.php";
include "../view/home.php";
include "../view/footer.php";
include "global.php";
$sp_new = loadall_sanpham_home();
$dsdm = loadall_danhmuc();
// $dstop_10 = loadall_sanpham_top10();

if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
  $act = $_GET['act'];
  switch ($act) {
    case 'dangxuat':
      session_destroy();
      header('Location:index.php');
      
      break;
    case 'quenmk':
      if (isset($_POST['gui']) && ($_POST['gui'])) {
        $email = $_POST['email'];
        $check_email=check_email($email);
        if (is_array($check_email)) {
          $thongbao ="Mật Khẩu của bạn là: ".$check_email['pass'];
        } else {
          $thongbao = " Email không tồn tại ";
        }
      }
      include "view/taikhoan/quenmk.php";
      break;
    case 'edit':
      if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
        $email = $_POST['email'];
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $id= $_POST['id'];

        update_taikhoan($id,$user, $pass, $email, $address, $phone);
        $_SESSION['user'] = check_user($user,$pass);
        header('Location:index.php?ac=edit');
      }

      include "view/taikhoan/edit.php";

      break;
    case 'dangky':
      if (isset($_POST['dangky']) && ($_POST['dangky'])) {
        $email = $_POST['email'];
        $user = $_POST['name'];
        $pass = $_POST['pass'];
        insert_account($user, $pass, $email);
        $thongbao = "Đăng Ký Thành Công mời đăng nhập ";
      }

      include "../view/taikhoan/dangky.php";

      break;
    case 'dangnhap':
      if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $check_user = check_user($user, $pass);
        if (is_array($check_user)){
          $_SESSION['user']=$check_user;
          header('Location:index.php');
          // $thongbao ="Đăng Nhập Thành Công mời đăng nhập ";
        } else {
          $thongbao = "Tài khoản không tồn tại, vui lòng kiểm tra lại hoặc đăng ký ";
        }
      }


      include "view/taikhoan/dangky.php";

      break;

    case 'sanphamct':


      if (isset($_GET["idsp"]) && $_GET["idsp"] > 0) {
        $id = $_GET["idsp"];
        $onesp = loadone_sanpham($id);
        $sp_cung_loai = load_sanpham_cungloai($id);
        include "view/spchitiet.php";
      } else {
        include "view/home.php";
      }

      break;
    case 'sanpham':

      if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
        $kyw = $_POST['kyw'];
      } else {
        $kyw = "";
      }
      if (isset($_GET["iddm"]) && ($_GET["iddm"]) > 0) {
        $iddm = $_GET["iddm"];
      } else {
        $iddm = 0;
      }

      $dssp = loadall_sanpham($kyw, $iddm);
      $tendm = loadone_tensanpham($iddm);

      include "view/sanpham.php";
      break;

    default:
      include "view/home.php";
      break;
  }
} else {
  include "../view/home.php";
}

include "../view/footer.php";
