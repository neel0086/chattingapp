const form = document.querySelector(".login form"),
continueBtn = form.querySelector(".feild button");
var error = document.querySelector(".form .error_area")
console.log(error);

form.onsubmit = (e)=>{
    e.preventDefault();
}

continueBtn.onclick = ()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/login.php", true);
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
              let data = xhr.response;
              console.log(data);
              $x = data;
              if(data!=0){
               console.log(9);
                 location.href = "users.php";
              }else{
                error.style.display = "block";
               console.log("failed try again"); 
               console.log(error);
              }
          }
      }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}