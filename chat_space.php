<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
    session_start();
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chatting app</title>
    <link rel="stylesheet" href="style.css" >
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia|Roboto|Noto Sans|Audiowide|Trirong&effect=neon|outline|emboss|shadow-multiple">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
</head>
<body class="chats">
    
    <div class="container_userspace">
         
        <section class="chat-area">
            <header>
            
            <?php    
                 $conn = mysqli_connect("localhost","root","","chatapp");
                
                 
                 $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
                 $_SESSION['user_id'] = $_GET['user_id'];
                 $sql = "SELECT * FROM userdetail WHERE random = {$user_id}";
                 $result = mysqli_query($conn, $sql);
                 $num = mysqli_num_rows($result);
                 
                 if($num > 0){
                     $row = mysqli_fetch_array($result);
                 }
                ?>

                    <a href="users.php"><i class="fas fa-arrow-left" class="back_btn"></i></a>
                    <img src="php/<?php echo $row['Image']; ?>" alt="">
                    <div class="details">
                         <span><?php echo $row['Name'] ?></span>                       
                         
                    </div>
                    
                 
                
            </header> 
            <div class="chat-box">
                          
            </div>   
            <form action="#" class="typing-area" autocomplete="off">
                <input type="text" name="in_mssgid" value="<?php echo $user_id?>" hidden>
                <input type="text" name="out_mssgid" value="<?php echo $_SESSION['unique_id']?>" hidden>
                <input type="text" placeholder="Type a message" name="message" class="vanish_mssg" spellcheck="fasle">
                <button><i class="fab fa-telegram-plane"></i></button>
            </form>    
            </div>
            
            
                        
    </section>
    
    


    </div>
    
    <script src="javascript/chat_request.js"></script>
    <script src="javascript/imagezoom.js"></script>
</body>
</html> 