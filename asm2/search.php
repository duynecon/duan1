<?php
define('BASE_PATH','/php2/asm2');
require_once "config/func.php";

    if(isset($_POST['btnSearch'])&&($_POST['kyw'])){
        $kyw = create_slug($_POST['kyw']);
        header('location: '.BASE_PATH.'/product/search/'.$kyw);
    }else{
        header('location: '.BASE_PATH);
        
    }
?>