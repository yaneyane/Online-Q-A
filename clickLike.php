<?php


$clickLike = $_POST['clickLike'];
$uid = $clickLike['UserID'];
$qid = $clickLike['qID'];
$con=@new mysqli("123.206.68.192", "root", "");
//如果连接错误
if(mysqli_connect_errno()){
    echo "连接数据库失败：".mysqli_connect_error();
    $con=null;
    exit;
}
mysqli_select_db($con, "problem");

$sql = ("insert into questionLike values('$uid','$qid');");
$result = mysqli_query($con,$sql);

echo json_encode($result);

?>