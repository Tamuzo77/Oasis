
let a =document.querySelector(".menu")
let b =document.querySelector("nav")
let bar1 =document.querySelector(".bar1")
let bar2 =document.querySelector(".bar2")
let bar3 =document.querySelector(".bar3")

a.addEventListener("click",()=>{

b.classList.toggle("link1-visibility")
bar1.classList.toggle("menu-bar1")
bar2.classList.toggle("menu-bar2")
bar3.classList.toggle("menu-bar3")

});

