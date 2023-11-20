<?php

    function insert_danhmuc($name_dm){
        $sql="insert into danh_muc(name_dm) values('$name_dm')";
        pdo_execute($sql);
    }

    function delete_danhmuc($id_dm){
        $sql="delete from danh_muc where id_dm =".$id_dm;
        pdo_execute($sql);
    }

    function loadall_danhmuc(){
        $sql=" SELECT * FROM danh_muc order by id_dm desc";
        $listdanhmuc=pdo_query($sql);
        return  $listdanhmuc;
    }

    function loadone_danhmuc($id_dm){
        $sql="select * from danh_muc where id_dm =".$id_dm;  
        $dm=pdo_query_one($sql);
        return $dm;
    }

    function update_danhmuc($id_dm,$name_dm){
        $sql="update danh_muc set name='".$name_dm."' where id_dm =".$id_dm;
        pdo_execute($sql);  
    }
?>