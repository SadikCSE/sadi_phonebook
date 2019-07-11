<?php
    include_once __DIR__.'/model/function.php';

    if(!empty($_GET)){
        $cId = $_GET['del'];
        $res = delete_contact($cId);
        if($res){
            header('location:index.php');
        }else{
            echo 'Failed';
        }
    }

