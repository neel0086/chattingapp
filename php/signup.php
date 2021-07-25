<?php
session_start();?>

<?php
$conn = mysqli_connect("localhost","root","","chatapp");
// if($conn)
// {
//     echo "database connected";
// }
// echo "hello";
$fname = mysqli_real_escape_string($conn, $_POST['fname']);
$lname = mysqli_real_escape_string($conn, $_POST['lname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$gender = mysqli_real_escape_string($conn, $_POST['gender']);
$name = $fname.' '.$lname;
$rand = rand(time(), 100000000);


// $country = mysqli_real_escape_string($conn, $_POST['country']);
// $gender = mysqli_real_escape_string($conn, $_POST['gender']);

if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password) && !empty($gender)){

$sql = "INSERT INTO userdetail(Name, Email, Password, Gender, random, Bio) values ('$name', '$email', '$password','$gender','$rand','I am there!!')";
mysqli_query($conn, $sql);

$image ='image/'.$_FILES['file-input']['name'];
$image = mysqli_real_escape_string($conn,$image);
if(copy($_FILES['file-input']['tmp_name'],$image)){
    
    $status = "Active Now"; 
$sql = "UPDATE userdetail SET Image = '$image' WHERE Email = '$email'";
mysqli_query($conn, $sql);
$sql = "UPDATE userdetail SET a_status = '$status' WHERE Email = '$email'";
mysqli_query($conn, $sql);
$_SESSION['unique_id'] = $rand;
echo 1;




}
}
else{
    echo 0;
}
?>
