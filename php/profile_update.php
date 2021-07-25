<?php
session_start();?>

<?php
$conn = mysqli_connect("localhost","root","","chatapp");
// if($conn)
// {
//     echo "database connected";
// }
$image ='image/'.$_FILES['update_p']['name'];
$image = mysqli_real_escape_string($conn,$image);
$Bio = mysqli_real_escape_string($conn, $_POST['Bio']);
if($image !== "image/<br />"){
    echo $image;
if(copy($_FILES['update_p']['tmp_name'],$image)){
    
$sql = "UPDATE userdetail SET Image = '$image' WHERE random = {$_SESSION['unique_id']}";
mysqli_query($conn, $sql);}
  }
 
 
 $sql = "UPDATE userdetail SET Bio = '$Bio' WHERE random = {$_SESSION['unique_id']}";

 mysqli_query($conn, $sql);
echo 1;




// else{
    
// }
?>
