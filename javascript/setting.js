var set = document.querySelector(".users"),
setting = set.querySelector('header .bar');
var logout= document.querySelector(".settings")
// console.log(setting);

setting.onclick = () =>{
    if(getComputedStyle(logout).display === "none"){
    setting.classList.toggle("change");
    logout.style.display = "block";
    }
    else{
        setting.classList.toggle("change");
        logout.style.display = "none";
    }
}

