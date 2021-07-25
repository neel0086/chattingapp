const userlist = document.querySelector('.users .users-list');
console.log(userlist);
 setInterval(()=>{
     let xhr = new XMLHttpRequest();
     xhr.open("GET", "php/user_backend.php", true);
     xhr.onload=()=>{
         if(xhr.readyState == XMLHttpRequest.DONE){
             if(xhr.status == 200)
             {
                 let data = xhr.response;
                 userlist.innerHTML = data;

             }
         }
     }
     xhr.send();

 },500);