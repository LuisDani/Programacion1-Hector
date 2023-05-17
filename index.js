const text= document.querySelector(".second-text");
const textLoad = () => {
    setTimeout(() => {
        text.textContent = "Sabor";
    }, 0)
    setTimeout(() => {
        text.textContent = "Estilo";
    }, 4000)
}

textLoad();
setInterval(textLoad,8000);

/* button ir arriba */
window.onscroll = function(){
    if(document.documentElement.scrollTop > 100){
        document.querySelector('.container-arriba')
        .classList.add('show');
    }
    else{
        document.querySelector('.container-arriba')
        .classList.remove('show');
    }
}

document.querySelector('.container-arriba')
.addEventListener('click', () =>{
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});

//redireccion
function redireccion(){
    location.href = "menu.html"
}