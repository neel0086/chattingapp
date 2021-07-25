var form = document.querySelector(".signup form"),
cnbtn = form.querySelector(".sub button");
console.log(cnbtn);
console.log(form);

form.onsubmit = (e)=>{
    e.preventDefault();
}

cnbtn.onclick = ()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/signup.php", true);
    xhr.onload = ()=>{
        if(xhr.readyState == XMLHttpRequest.DONE)
        {
            

            if(xhr.status == 200)
            {
                let data = xhr.response;
                
                    if(data!=0){
                        console.log(data);
                    location.href = "users.php";
                    
                    }
                
                
            }
        
        }

        
    }
    let formData  = new FormData(form)
    xhr.send(formData);
}


