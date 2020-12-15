/**
* Grup: 1
* Membres: David Falcó, Anwar El Khattabi, Cristian Diac i Joaquín Bernaltes
*/
package bibliotecaIO;
import java.util.Scanner;
import java.text.Normalizer;

public class BibliotecaIO {
  public static final int MAXIM = 1000;
  /*Mètode per mostrar un missatge informatiu i esperi i reculli una
  cadena de text (de contingut no buit) que l'usuari entri des del teclat.*/
  public String entrarText(String missatgeExplicatiu){
    Scanner sc = new Scanner(System.in);
    System.out.println(missatgeExplicatiu);
    String text = sc.nextLine();
    //Si la cadena està buida, torna a demanar el text.
    while(text.length() == 0){
      System.out.println("Cadena buida. " + missatgeExplicatiu);
      text = sc.nextLine();
    }
    return text;
  }

  /* Mètode que demana una opció del menú, comprova que sigui una opció
  correcta i retorna l'opció escollida */
  public int escollirOpcio(String[] opcions) {
    Scanner sc = new Scanner(System.in);
    int opcio = 0;
    boolean correcte = false;
    do {
      //Mira si l'opció és del mateix tipus i si està dins del rang de l'array.
      try{
        System.out.println("Escull una opció");
        opcio = sc.nextInt();
        opcio -= 1;
        if(opcio < 0 || opcio >= opcions.length){
          System.out.println("L'opció no és correcta");
        }
        else {
          correcte = true;
        }
      }
      //Controlem l'error i tornem a demanar una nova opció.
      catch(Exception e){
        System.out.println("L'opció no és correcta");
        sc.next();
      }
    } while(!correcte);
    opcio += 1;
    return opcio;
  }
  /* Demana a l'usuari si vol confirmar l'operació o no */
  public boolean confirmar() {
    Scanner sc = new Scanner(System.in);
    boolean confirmat = false;
    System.out.println("Vols continuar, sí o no?");
    String confirmacio = sc.nextLine();
    //Eliminen els accents per poder comparar la cadena.
    confirmacio = Normalizer.normalize(confirmacio, Normalizer.Form.NFD);
    confirmacio = confirmacio.replaceAll("[\\p{InCombiningDiacriticalMarks}]", "");
    System.out.println(confirmacio);
    //Ignora si té minúscules i majúscules.
    if(confirmacio.equalsIgnoreCase("Si")) {
      confirmat = true;
    }
    System.out.println(confirmat);
    return confirmat;
  }
  /* Mostra per pantalla les opcions que ha d'escollir l'usuari. */
  public void imprimirMenu(String[] opcions){
    for(int i = 0; i < opcions.length; i++) {
      System.out.println(i + 1 + ") " + opcions[i]);
    }
  }

  /*Mostra per pantalla si s'ha pogut fer
  l'operació (alta, baixa, modificar i eliminar) o no. */
  public void mostrarCoincidencia(boolean trobat) {
    if(trobat) {
      System.out.println("S'ha fet l'operació correctament");
    }
    else {
      System.out.println("No s'ha pogut fer l'operació");
    }
  }
  /* Mostra per pantalla si hi ha algun element o no en els arrays */
  public static void llistaBuida(int comptador){
    if(comptador == 0){
      System.out.println("No n'hi ha cap");
    }
  }
  public static boolean esBuida(int comptador){
    return comptador == 0;
  }
}
