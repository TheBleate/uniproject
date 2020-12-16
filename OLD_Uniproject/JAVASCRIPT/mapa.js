var titol="El mapa esta en manteniment, a continuació et mostrem informació sobre la búsqueda:"
var iesmontsia = ["Carrer Madrid 35-49","43870 Amposta (Tarragona)","Telèfon: 977700043","Email: info@iesmontsia.org"];
var iesebre=["Av. Colom 34-42","43500 Tortosa","Tel: 977500949","e-mail: iesebre@iesebre.com"];
var mostrar="";

function funcioMapa() {
  var institut = document.getElementById("selectmapai").value;
  switch (parseInt(institut)) {
   case 1:
        for (var i = 0; i < iesmontsia.length; i++) {
           mostrar+="\n"+iesmontsia[i];
        }

        window.alert(titol+"\n"+mostrar);
        mostrar=" ";
        break;
    case 2:
         for (var i = 0; i < iesebre.length; i++) {
            mostrar+="\n"+iesebre[i];
         }
         window.alert(titol+"\n"+mostrar);
         mostrar=" ";
     break;
   default:
 }
}

function funcioMapaEmpresa() {
  var institut = document.getElementById("selectmapai").value;
  switch (parseInt(institut)) {
   case 1:
        for (var i = 0; i < iesmontsia.length; i++) {
           mostrar+="\n"+iesmontsia[i];
        }

        window.alert(titol+"\n"+mostrar);
        mostrar=" ";
        break;
    case 2:
         for (var i = 0; i < iesebre.length; i++) {
            mostrar+="\n"+iesebre[i];
         }
         window.alert(titol+"\n"+mostrar);
         mostrar=" ";
     break;
   default:
 }
}

const navSlide = () => {
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.nav-links');
    const navLinks = document.querySelectorAll('.nav-links li');

    burger.addEventListener('click',()=>{
        //Toggle Nav
        nav.classList.toggle('nav-active');

        //Links animats
        navLinks.forEach((link, index) =>{
            if (link.style.animation) {
                link.style.animation = '';
            }else{
                link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.5}s`;
            }

        });
        //Animació del burger
        burger.classList.toggle('toggle');


    });

}

navSlide();
