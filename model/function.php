<?php

    $link = null;
    function connect(){
    global $link;
    $link = mysqli_connect('localhost','root','','sadiphonebook');
    return $link;
}

function disconnect(){
    global $link;
    mysqli_close($link);
}


function register_user($name,$email,$password,$vercode){
    global $link;
    connect();
    $query = "INSERT INTO spb_user(u_name,u_email,u_pass,u_vercode)"
                ."VALUES('$name','$email','$password','$vercode')";
    $res = mysqli_real_query($link, $query);
    disconnect();
    return $res;
}

function get_user($email){
        global $link;
        connect();
        $query = "SELECT * FROM spb_user WHERE u_email = '$email'";
        $q = mysqli_query($link, $query);
        $f = mysqli_fetch_assoc($q);
        disconnect();
        return $f;
}

function get_all_contact($uId){
    global $link;
    connect();
    $query = "SELECT * FROM spb_contact WHERE u_id = '$uId'";
    $q = mysqli_query($link, $query);
    $f = mysqli_fetch_all($q,MYSQLI_ASSOC);
    disconnect();
    return $f;
}

function get_single_contact($cId){
    global $link;
    connect();
    $query = "SELECT * FROM spb_contact WHERE c_id = '$cId'";
    $q = mysqli_query($link, $query);
    $f = mysqli_fetch_assoc($q);
    disconnect();
    return $f;
}

function add_contact($name, $phone, $uId){
    global $link;
    connect();
    $query = "INSERT INTO spb_contact(c_name,c_phone,u_id)"."VALUES('$name','$phone','$uId')";
    $res = mysqli_query($link, $query);
    disconnect();
    return $res;
}

function update_contact($name, $phone, $cId){
    global $link;
    connect();
    $query = "UPDATE spb_contact SET c_name='$name', c_phone='$phone' WHERE c_id='$cId'";
    $res = mysqli_query($link, $query);
    disconnect();
    return $res;
}

function delete_contact($cId){
    global $link;
    connect();
    $query = "DELETE FROM spb_contact WHERE c_id = $cId";
    $res = mysqli_query($link, $query);
    disconnect();
    return $res;
}