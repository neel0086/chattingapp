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

$sql = "SELECT * FROM conversations WHERE (out_mssgid = '$out_id' AND in_mssgid = '$in_id') OR 
(out_mssgid = '$in_id' AND in_mssgid = '$out_id') ";
$result = mysqli_query($conn, $sql);

$s = "SELECT * FROM userdetail where random = $in_id";
$query =  mysqli_query($conn, $s);
$roww = mysqli_fetch_assoc($query);
while($row = mysqli_fetch_assoc($result)){
    $outputs = ""; 
    if($row['out_mssgid'] == $out_id){
           $outputs .= '<div class="chat outgoing">
                        <img src="#" alt="">
                        <div class="details">
                            <p>'.$row['messages'].'</p>
                            <span>'.$row['mssg_time'].'</span>
                        </div>
                    </div>';
    }
    else{
        $outputs .= '<div class="chat incoming">
                    <img src="php/'.$roww['Image'].'">
                    <div class="details">
                        <p>'.$row['messages'].'</p>
                        <span>'.$row['mssg_time'].'</span>
                    </div>
                </div>';
                }
    echo $outputs; 
               
}

?>
