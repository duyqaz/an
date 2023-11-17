<?php
function insert_sanpham($name_sp, $price,$mota, $image,  $iddm)
{
    $sql = "insert into san_pham (name_sp,price,mota,img,iddm) values ('$name_sp','$price','$mota','$image','$iddm')";
    pdo_execute($sql);
}
function delete_sanpham($id)
{
    $sql = "delete from san_pham where id_sp=" . $id;
    pdo_query($sql);
}

function loadall_sanpham($kyw, $iddm)
{
    $sql = "select * from san_pham where 1";

    if ($kyw != "") {
        $sql .= " and name_sp like '%" . $kyw . "%'";
    }
    if ($iddm > 0) {
        $sql .= " and iddm = '" . $iddm . "'";
    }
    $sql .= " order by id desc";
    $listsp = pdo_query($sql);
    return $listsp;
}
function loadall_sanpham_top10()
{
    $sql = "select * from san_pham where 1 order by view desc limit 0,10";
    $listsp = pdo_query($sql);
    return $listsp;
}
function loadall_sanpham_home()
{
    $sql = "select * from san_pham where 1 order by id desc limit 0,9";
    $listsp = pdo_query($sql);
    return $listsp;
}
function loadone_sanpham($id)
{
    $sql = " select * from san_pham where id_sp=" . $id;
    $sp = pdo_query_one($sql);
    return $sp;
}
function loadone_tensanpham($iddm)
{
    if($iddm>0){
       $sql = " select * from danhmuc where id=" . $iddm;
    $dm = pdo_query_one($sql);
    extract($dm);
    return $dm; 
    }else{
        return "";
    }
    
}
function load_sanpham_cungloai($id)
{
    $sql=" SELECT * from san_pham where id_sp <> ". $id;
    $listsp = pdo_query($sql);
    return $listsp;
}
function update_sanpham($id,$iddm, $name_sp, $mota,$price,  $image)
{
    if ($image != "") {
        $sql = "update san_pham set iddm='".$iddm."', name='" . $name_sp . "',price='" . $price. "',mota='" . $mota . "',img='" . $image . "' where id_sp=" . $id;
    } else {
        $sql = "update san_pham set iddm='".$iddm."', name='" . $name_sp . "' ,price='" . $price. "',mota='" . $mota . "' where id_sp=" . $id;
    }


    pdo_execute($sql);
}
?>