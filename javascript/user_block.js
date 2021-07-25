var zoom = document.querySelector('.container_user'),
zoom_profile = zoom.querySelector('img');
var profile_photo = document.querySelector('.profile_photo img'),

cross = document.querySelector('.profile_photo span');
// profile = document.querySelector('.profile_photo');
 console.log(zoom_profile);
 console.log(cross);
 
 zoom_profile.onclick = () =>{
    if(getComputedStyle(profile_photo).display === "none"){
    zoom.style.opacity = 0.2;
    
    profile_photo.style.display = "block";
    cross.style.display = "block";
    console.log(getComputedStyle(profile_photo).display);    
    
    
}    
 }
 cross.onclick = () =>{
    if(getComputedStyle(profile_photo).display === "block"){
    zoom.style.opacity = 1;
    
    profile_photo.style.display = "none";
    cross.style.display = "none";
    console.log(getComputedStyle(profile_photo).display);    
    return;
    
}    
 }
back = document.querySelector('.edit_ps .back');
back.onclick = () =>{
    
    window.history.back();

 }
 
 