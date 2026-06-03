var username = document.getElementById("username");
var ul2 = document.getElementById("ul2");
var user = localStorage.getItem("user");
var info = document.getElementById("info");
var userUser = document.getElementById("user-user");
var firstName = document.getElementById("user-firstname");
var lastName = document.getElementById("user-lastname");
var userRole = document.getElementById("user-role");
var h1 = document.querySelector("h1");
var ul1 = document.getElementById("ul1");
var message = document.getElementById("message");
var btnMessage = document.getElementById("btnMessage");
var logoutBtn = document.getElementById("logout");
// pulling out the user info form local storage and show it
if(!JSON.parse(user) == ""){
    ul2.style.display="none";
    username.style.display="block";
    username.innerHTML = JSON.parse(user).username;
}else{
    username.style.display="none";
    h1.classList.add("notActive");
    ul1.classList.add("notActive");
    ul2.classList.add("notActive");
    btnMessage.classList.add("isActive");
    message.classList.add("isActive");   
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
});
logoutBtn.addEventListener("click",()=>{
    localStorage.clear("user");
});