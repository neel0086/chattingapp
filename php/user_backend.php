<?php
session_start();?>

<?php
$conn = mysqli_connect("localhost","root","","chatapp");
$output = "";

$s = "SELECT * FROM userdetail WHERE NOT random = {$_SESSION['unique_id']}";
$result = mysqli_query($conn, $s);
$num = mysqli_num_rows($result);
// $row = mysqli_fetch_array($result);



if($num>0){
    while($row = mysqli_fetch_assoc($result)){
        $sql = "SELECT * FROM conversations WHERE (out_mssgid = {$_SESSION['unique_id']} AND in_mssgid = {$row['random']}) OR 
        (out_mssgid = {$row['random']} AND in_mssgid = {$_SESSION['unique_id']}) ORDER BY mssg_id DESC LIMIT 1";
        $re = mysqli_query($conn, $sql); 
        $numr = mysqli_num_rows($re);
        if($numr>0){
        $qu = mysqli_fetch_assoc($re);
        $front = $qu['messages'];
        $qu['out_mssgid'] === $_SESSION['unique_id'] ? $front='you:'.$qu['messages']:$front=$qu['messages'];
        }
        else{
            $front = 'Status:'.$row['Bio'];
        }
        (strlen($front) > 20) ? $front = substr($front,0,20).'....':$front= $front;
        ($row['a_status'] === "offline") ? $offline = 'offline' : $offline = "";
        $output .= '<a href="chat_space.php?user_id='.$row['random'].'">
                    <div class="content">
                    <img src="php/'.$row['Image'].'" alt="">
                    <div class="details">
                        <span>'.$row["Name"].'</span>                    
                        <p>'.$front.'</p>
                    </div>

                    </div>
                    <div class="status-dot '.$offline.'">
                        <span>A</span> 

                    </div>
                </a>';
            
    }
    echo $output;

    }

