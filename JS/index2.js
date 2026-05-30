var username = document.getElementById("username");
var ul2 = document.getElementById("ul2");
var user = localStorage.getItem("user");
var info = document.getElementById("info");
var userUser = document.getElementById("user-user");
var firstName = document.getElementById("user-firstname");
var lastName = document.getElementById("user-lastname");
var userRole = document.getElementById("user-role");
// pulling out the user info form local storage and show it
if(!JSON.parse(user) == ""){
    ul2.style.display="none";
    username.style.display="block";
    username.innerHTML = JSON.parse(user).username;
}else{
    ul2.style.display="flex";
    username.style.display="none";
}

username.addEventListener("click",(e)=>{
    e.stopPropagation();
    info.classList.toggle("active");
    userUser.innerHTML=JSON.parse(user).username;
    firstName.innerHTML=JSON.parse(user).firstName;
    lastName.innerHTML=JSON.parse(user).lastName;
    if(JSON.parse(user).isManager){
        userRole.innerHTML="مدیر";
    }else{
        userRole.innerHTML="ساکن";
    }
})
document.addEventListener("click",()=>{
    info.classList.remove("active");
})