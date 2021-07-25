var pass = document.querySelector(".form input[type='password']"),
toggle_pass = document.querySelector(".form .eye i");
// console.log(toggle_pass);

toggle_pass.onclick = ()=>{
    if(pass.type=="password")
    {
      
        pass.type = "text";
        toggle_pass.classList.add('active');

    }
    else{
        
        pass.type = "password";
        toggle_pass.classList.remove('active');

    }
}