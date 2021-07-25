<?php
session_start();?>

<?php
$conn = mysqli_connect("localhost","root","","chatapp");
// if($conn)
// {
//     echo "database connected";
// }
// echo "hello";
$out_id = mysqli_real_escape_string($conn, $_POST['out_mssgid']);
$in_id = mysqli_real_escape_string($conn, $_POST['in_mssgid']);
$mssg = mysqli_real_escape_string($conn, $_POST['message']);
date_default_timezone_set("Asia/Kolkata");
$time = date('h:i');

if(!empty($mssg)){
$sql = "INSERT INTO conversations(in_mssgid, out_mssgid, messages, mssg_time) values ('$in_id', '$out_id', '$mssg','$time')";
mysqli_query($conn, $sql);
}
?>
