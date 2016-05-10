<?php
session_start();
if(isset($_POST['width']) && isset($_POST['height'])) {
    $_SESSION['wid']=$_POST['width'];
    $_SESSION['hei']=$_POST['height'];
    echo json_encode(array('outcome'=>'1'));
} else {
    echo json_encode(array('outcome'=>'0'));
}
?>
