var loader = document.querySelector("#preloader");
var nav = document.querySelector("#navbar");
loader.style.opacity = 1;
var waiit = ()=> {setInterval(load,100);}
var load = ()=>{
    if(loader.style.opacity > 0){
        loader.style.opacity -= 0.3;
    }
    document.querySelector("#navbar").style.display = "flex";
}
let wait = setTimeout(waiit,2000);
window.addEventListener("load",wait)
