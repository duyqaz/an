<?php
    function loadall_taikhoan(){ 
        $sql ="select * from taikhoan order by idtk desc ";
        $listkh = pdo_query($sql);
        return $listkh;

    }
    function insert_account($user,$pass,$email) { 
        $sql=" insert into taikhoan (user,pass,email) values ('$user','$pass','$email')";
        pdo_execute($sql);

    }
    function check_user($user, $pass)
    {
        $sql ="select * from taikhoan where user='".$user."' AND pass='".$pass."'";
        $sp = pdo_query_one($sql);
        return $sp;
    }
    function check_email($email)
    {
        $sql ="select * from taikhoan where email='".$email."'";
        $sp = pdo_query_one($sql);
        return $sp;
    }
    function update_taikhoan($id,$user, $pass, $email, $address, $phone)
{
        $sql = "update taikhoan set user='".$user."',pass='".$pass."',email='" . $email. "',address='" . $address . "',phone='" . $phone. "' where id=" . $id; 
    pdo_execute($sql);
}
function delete_taikhoan($id)
{
    $sql = "delete from taikhoan where idtk=" . $id;
    pdo_query($sql);
}

?>