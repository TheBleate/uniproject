

function alerta(){
  //rebem informació ID del fitxer HTML, camps user i password
  document.getElementById("user").value
  document.getElementById("password").value

  alert("L'usuari introduit es: " + user.value + " i la contrasenya " + password.value)

  var txt = "";
  var usuari = user.value;
  var contrasenya = password.value;
  var valors = {usuari, contrasenya};
  var x;

  for(let x in valors){
    if(x == 'usuari'){
      txt += "L'usuari es " + valors[x] + " ";
    } else {
      txt += " La contrasenya es " + valors[x] + " ";
    }
  }
    document.getElementById("mostra").innerHTML = txt;
}
