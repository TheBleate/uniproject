/**
* Grup: 1
* Membres: David Falcó, Anwar El Khattabi, Cristian Diac i Joaquín Bernaltes
*/

package gestio;
import bibliotecaIO.BibliotecaIO;

public class Categoria {
  /* Atributs */
  private String nom;
  private String tipus;
  private static int comptadorCategories = 0;

  /* Contructors */
  public Categoria() {
  }
  public Categoria(String nom, String tipus) {
    this.nom = nom;
    this.tipus = tipus;
  }

	/**
	* Retorna el valor de nom
	* @return
	*/
	public String getNom() {
  	return nom;
  }

	/**
	* Actualitza el valor de nom
  * @param
	*/
	public void setNom(String nom) {
  	this.nom = nom;
	}

	/**
	* Retorna el valor de tipus
	* @return
	*/
	public String getTipus() {
		return tipus;
	}

	/**
	* Actualitza el valor de tipus
	* @param
	*/
  public void setTipus(String tipus) {
  	this.tipus = tipus;
	}

	/**
	* Retorna el valor de comptadorCategories
	* @return
	*/
	public static int getComptadorCategories() {
		return comptadorCategories;
	}

	/**
	* Actualitza el valor de comptadorCategories
	* @param
	*/
	public static void setComptadorCategories(int comptadorCategories) {
  	Categoria.comptadorCategories = comptadorCategories;
  }

  /* Crea la categoria*/
  public Categoria[] crearCategoria(Categoria[] categories, BibliotecaIO io) {
    if(BibliotecaIO.MAXIM == comptadorCategories){
      System.out.println("S'ha arribat al màxim d'emmatgemament");
    }
    else{
      categories[comptadorCategories] = new Categoria(io.entrarText("Posa el nom de la categoria"),io.entrarText("Posa el tipus de la categoria"));
      comptadorCategories++;
    }
    return categories;
  }

  /* Elimina les categories*/
  public Categoria[] eliminarCategoria(Categoria[] categories, BibliotecaIO io) {
    boolean trobat = false;
    String nomCentre = io.entrarText("Posa el nom de l'institut");
    for(int i = 0; i < comptadorCategories; i++){
      //Si troba la coincidència, envia l'element al final i l'elimina
      if(categories[i].nom.equalsIgnoreCase(nomCentre)){
        int j = i;
        for(; j < comptadorCategories; j++){
          categories[j] = categories[j+1];
        }
        categories[j] = null;
        trobat = true;
        comptadorCategories--;
      }
    }
    io.mostrarCoincidencia(trobat);
    return categories;
  }

  /* Modifica les categoriess */
  public Categoria[] modificarCategoria(Categoria[] categories, BibliotecaIO io, int opcio) {
    String modificat = io.entrarText("Escriu l'opció a modificar");
    String nomNou = "";
    for(int i = 0; i < comptadorCategories; i++) {
      if(categories[i].nom.equalsIgnoreCase(modificat) && opcio == 1) {
        nomNou = io.entrarText("Posa el nom nou");
        categories[i].nom = nomNou;
      }
      else if(categories[i].tipus.equalsIgnoreCase(modificat) && opcio == 2) {
        nomNou = io.entrarText("Posa la nova descripció");
        categories[i].tipus = nomNou;
      }
    }
    return categories;
  }

  /*  Llista les categories*/
  public static void llistarCategoria(Categoria[] categories){
    boolean coincidencia = false;
    BibliotecaIO.llistaBuida(comptadorCategories);//Mira si hi ha algun element.
    for(int i = 0; i < comptadorCategories; i++){
      System.out.println(categories[i].nom + " " + categories[i].tipus);
    }
  }

}
