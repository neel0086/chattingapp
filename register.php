<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chatting app</title>
    <link rel="stylesheet" href="style.css" >
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia|Audiowide|Trirong&effect=neon|outline|emboss|shadow-multiple">
    
</head>
<body>
    <div class="container">
        <section class="form signup">
            <header>Sign Up</header>
        <form action="#" enctype="multipart/form-data" method="POST">
        <div class="name_details">
            <div class="feild input">
                
                <input type="text" name="fname" placeholder="First Name" required spellcheck="false">
            </div>
            <div class="feild input">
    
                <input type="text" name="lname" placeholder="Last Name" required spellcheck="false">
            </div>
        </div>
        <div class="private">
        <div class="feild input">
         
            <input type="text" name="email" placeholder="Enter your email" required spellcheck="false">
        </div>
        <div class="feild input">
            
            <input type="password" name="password" placeholder="Password" required>
        </div>     
        <div class="feild image-upload">
            <label for="file-input">
                <img src="https://cdn1.iconfinder.com/data/icons/iconmart-web-icons-2/64/camera-512.png"><span>Upload Your profile image</span>
            </label>
            <input type="file" name="file-input" id= "file-input"class="camera">  
        </div>
        <div >
            
            <span class="gen">
            <input type="radio" id="male" name="gender" value="male">
            <label for="male">Male</label></span>
            <span class="gen">
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label></span>
            <span class="gen">
            <input type="radio" id="other" name="gender" value="other">
            <label for="other">Other</label></span>
            </div>
        <div class="feild sub eye">
          
            <button type="submit" value="Log IN">Log IN</button>
        </div> 
    </div>
    
        </form>
    
        <div class="link">Not a new user?<a href="login_html_css.php"> Log IN here</a>
        </div>    
    </section>


    </div>
    <script src="javascript/register_form.js">
        
    </script>
</body>
</html>