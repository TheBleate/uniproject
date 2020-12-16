var i = 0 //Començament contador
var imatges = [];
var time = 3000;

//Llistat d'imatges
imatges[0] = 'imatges/Foto.png';
imatges[1] = 'imatges/Foto1.png';
imatges[2] = 'imatges/Foto2.png';

//Creacio funcio
function slider(){
  document.slide.src = imatges[i];

  if(i < imatges.length - 1){
    i++
  } else {
    i=0;
  }
  setTimeout("slider()", time);

}
window.onload = slider;
