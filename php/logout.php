<?php
session_start();
$conn = mysqli_connect("localhost","root","","chatapp");
$userid = mysqli_real_escape_string($conn, $_GET['logid']);
$sql = "UPDATE userdetail SET a_status = 'offline' WHERE random = {$userid}";
mysqli_query($conn, $sql);
session_unset();
session_destroy();
header("location: ../login_html_css.php");
?>
