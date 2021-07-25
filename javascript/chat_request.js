var form = document.querySelector(".typing-area");
// cnbtn = form.querySelector(".");
cnbtn = form.querySelector("button");
mssg_send = form.querySelector(".vanish_mssg");


form.onsubmit = (e)=>{
    e.preventDefault();
}

cnbtn.onclick = ()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/chat_store.php", true);
    xhr.onload = ()=>{
        if(xhr.readyState == XMLHttpRequest.DONE)
        {
            

            if(xhr.status == 200)
            {
                let data = xhr.response;
                mssg_send.value = "";
                
                    
                
                
            }
        
        }

        
    }
    let formData  = new FormData(form)
    xhr.send(formData);
}


var usermssg = document.querySelector('.chat-area .chat-box');
setInterval(()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/chat_retrive.php", true);
    xhr.onload=()=>{
        if(xhr.readyState == XMLHttpRequest.DONE){
            if(xhr.status == 200)
            {
                
                let data = xhr.response;
                usermssg.innerHTML = "";
                usermssg.innerHTML = data;
                

            }
        }
    }
    let formData  = new FormData(form)
    xhr.send(formData);

},500);
