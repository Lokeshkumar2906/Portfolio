var dark = document.getElementById("dark");
dark.onclick= function(){
document.body.classList.toggle("dark-theme");
if(document.body.classList.contains("dark-theme")){
    dark.src="images/moon-solid.png"; 
}
else{
    dark.src="images/sun.png";
}
}
/* <i class="fa-solid fa-moon fa-fade"id="dark"></i> */
/* <i class="fa-regular fa-lightbulb fa-beat"id="dark"></i> */