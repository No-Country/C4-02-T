window.addEventListener("scroll", function(){
    var header=document.querySelector("header");
    header.classList.toggle("abajo", window.scrollY>0);
})

function mostrarOcultar(activo, ocultar1, ocultar2, ocultar3, ocultar4, ocultar5, ocultar6, ocultar7, ocultar8, ocultar9, ocultar10, ocultar11){
    document.getElementById(activo).style.display='flex'
    let ocultar = [ocultar1, ocultar2, ocultar3, ocultar4, ocultar5, ocultar6, ocultar7, ocultar8, ocultar9, ocultar10, ocultar11]
    for(i=0; i<ocultar.length; i++){
        document.getElementById(ocultar[i]).style.display='none'
    }
}