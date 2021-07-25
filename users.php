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

</head>
<body class="cnt">
    
    <div class="container_user">
         
        <section class="users">
            <header>
                
                <?php
                 
    $conn = mysqli_connect("localhost","root","","chatapp");
                

                 
                 $sql = "SELECT * FROM userdetail WHERE random = {$_SESSION['unique_id']}";
                 $result = mysqli_query($conn, $sql);
                 $num = mysqli_num_rows($result);
                 
                 if($num > 0){
                     $row = mysqli_fetch_array($result);
                 }
                 
                
                
                ?>
                <div class="content">
                    <img src="php/<?php echo $row['Image']; ?>" >
                    <div class="details">
                         <span><?php echo $row['Name'] ?></span>                       
                         <p><?php echo 'Status:'.$row['Bio'] ?></p>
                    </div>
                </div> 
                <div class="bar">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </div>
            </header> 
            <div class="search">
                <input type="text" placeholder="Enter the name to search">
                <button>
                    <i class="fas fa-search"></i>
                </button>

            </div>
            <div class="users-list">                

            </div>            
               
    </section>
    <section class="settings">
        <div class="set_zoom">
            <a><p>ll</p></a>
            <a><p>00lll</p></a>
            <a href="edit_profile.php"><p>Profile</p></a>
            <a href="php/logout.php?logid=<?php echo $row['random']?>"><p>Logout</p></a>

        </div>

    </section>
    <div class="profile_photo">
                    
                    <img src="php/<?php echo $row['Image']; ?>" alt="">
                    <span><i style="font-size:24px" class="fa">&#xf00d;</i></span>
                </div>

    </div>
    <script src="javascript/user_page.js"></script>
    <script src="javascript/setting.js"></script>
    
    
</body>
</html> 