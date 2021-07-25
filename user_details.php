<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chatting app</title>
    <link rel="stylesheet" href="style.css" >
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia|Audiowide|Roboto|Trirong&effect=neon|outline|emboss|shadow-multiple">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <?php 
    session_start();
    if(!isset($_SESSION['unique_id'])){
        header("location:login.php");
    }
    
    ?>
    <body class="cnt">  
            <div class="container_user">
             <?php
                
            $conn = mysqli_connect("localhost","root","","chatapp");       
            $sql = "SELECT * FROM userdetail WHERE random = {$_SESSION['user_id']}";
            $result = mysqli_query($conn, $sql);
            $num = mysqli_num_rows($result);
            if($num > 0){
                $row = mysqli_fetch_array($result);
            }
            ?>                 
                     
              <section class="edit_ps">
                  <div class="name_t"><p>Neel Mehta</p></div>
                  <i class="fa back">&#xf00d;</i>
                  
                      <div><img src="php/<?php echo $row['Image']; ?>"></div>      
                 
                      
                      
                      <div class="user_status_up">
                          <span class="user_status">Status:</span>
                          <span class="user_bio"><?php echo $row['Bio'];?></span>
                         
                      </div>
                      
                       
                  <div class="profile_trans"> <span>change <br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp profile &nbsp&nbsp <i class="fa fa-camera"></i></span></div>
               </section>
        
            </div>
            <div class="profile_photo">
                    
                    <img src="php/<?php echo $row['Image']; ?>" alt="">
                    <span><i style="font-size:24px" class="fa">&#xf00d;</i></span>
                </div>
                <script src="javascript/user_block.js"></script>
    </body>
    


</html>
