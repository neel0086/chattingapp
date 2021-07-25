var set = document.querySelector(".container_user"),
profile = set.querySelector('.edit_ps img');
var trans= document.querySelector(".profile_trans span");
profile.onmouseover = () =>{
    
    
    profile.style.opacity = 0.4;
    trans.style.display = "block";
}
profile.onmouseout = () =>{
    
    trans.style.display = "none";
    profile.style.opacity = 1;
}




var form = document.querySelector("form"),
up = document.querySelector(".edit_ps button");

form.onsubmit = (e)=>{
    e.preventDefault();
}

up.onclick = () =>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/profile_update.php", true);
    xhr.onload = ()=>{
        if(xhr.readyState == XMLHttpRequest.DONE)
        {
            
            if(xhr.status == 200)
            {
                let data = xhr.response;               
                
                    if(data!=0){
                        console.log(data);
                        location.reload();
                                            
                }     
            }        
        }        
    }
    let formData  = new FormData(form)
    xhr.send(formData);
}

var cross= document.querySelector(".edit_ps .back");
cross.onclick = () =>{
    location.href = "./users.php";
}
