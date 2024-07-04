<?php
include "base.php";
$chk = $User->count($_POST);
if ($chk) {
    $_SESSION['user'] = $_POST['acc'];
}
// 要註解掉$_POST的資料，否則資料傳送過去會無法正確顯示內容
// print_r($_POST);
echo $chk;
