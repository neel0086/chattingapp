


<?php
session_start();
$conn = mysqli_connect("localhost","root","","chatapp");
// if($conn)
// {
//     echo "database connected";
// }
// echo "hello";
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

$s = "SELECT * FROM userdetail where Password = '$password' &&  Email = '$email'";
$result = mysqli_query($conn, $s);
$num = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
// echo $num;
if($num>0){
    echo 1;
    $sql = "UPDATE userdetail SET a_status = 'Active Now' WHERE random = {$row['random']}";
    mysqli_query($conn, $sql);
    $_SESSION['unique_id'] = $row['random'];
    

}else{
echo 0;}

?>
