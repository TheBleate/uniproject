function minimCaracters() {
  const minim = 50;
  let caracters = document.getElementById('desc');
  let numCaracters = caracters.value.length;
  for (let i = 0; i <= numCaracters;i++) {
    if(numCaracters == 0){
      alert("No has posat res");
      break;
    }
    else if(numCaracters > 0 && numCaracters < minim && i == numCaracters){
      alert("El número de caràcters és inferior a " + minim + ", només n'has posat: " + i);
      break;
    }
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
