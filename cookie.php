<?php 
    if (isset($_COOKIE["kure"])){
        $count = $_COOKIE["kure"] + 1;
    }else{
        $count = 1;
    }
    setcookie("kure", $count);
    print('訪問回数は'.$count.'回目です');
?>