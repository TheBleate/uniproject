/**
* Grup: 1
* Membres: David Falcó, Anwar El Khattabi, Cristian Diac i Joaquín Bernaltes
*/

package gestio;
import bibliotecaIO.BibliotecaIO;
public class Institut {
  /* Atributs*/
  public String nom;
  public String telefon;
  public String email;
  public String localitat;
  public String adresa;
  private static int comptadorCentres = 0;

  /* Constructor */
  public Institut(){
  }

  public Institut(String nom, String telefon, String email, String localitat, String adresa){
    this.nom = nom;
    this.telefon = telefon;
    this.email = email;
    this.localitat = localitat;
    this.adresa = adresa;
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
	* Retorna el valor de telefon
	* @return
	*/
	public String getTelefon() {
		return telefon;
	}

	/**
	* Actualitza el valor de telefon
	*/
	public void setTelefon(String telefon) {
		this.telefon = telefon;
	}

	/**
	* Retorna el valor de email
	* @return
	*/
	public String getEmail() {
		return email;
	}

	/**
	* Actualitza el valor de email
	*/
  public void setEmail(String email) {
  	this.email = email;
	}

	/**
	* Retorna el valor de localitat
	* @return
	*/
	public String getLocalitat() {
		return localitat;
	}

	/**
	* Actualitza el valor de localitat
	*/
  public void setLocalitat(String localitat) {
  	this.localitat = localitat;
  }

	/**
  * Retorna el valor de adresa
  * @return
  */
	public String getAdresa() {
  	return adresa;
  }

	/**
	* Actualitza el valor de adresa
	*/
	public void setAdresa(String adresa) {
		this.adresa = adresa;
	}

	/**
	* Retorna el valor de comptadorCentres
	* @return
	*/
	public static int getComptadorCentres() {
  	return comptadorCentres;
	}

	/**
	* Actualitza el valor de comptadorCentres
	*/
  	public static void setComptadorCentres(int comptadorCentres) {
  		Institut.comptadorCentres = comptadorCentres;
  	}

  /* Mètodes */
  /* Crea els diferents instituts */
  public Institut[] crearCentre(Institut[] centres, BibliotecaIO io) {
    if(BibliotecaIO.MAXIM == comptadorCentres){
      System.out.println("S'ha arribat al màxim d'emmatgemament");
    }
    else{
      centres[comptadorCentres] = new Institut(io.entrarText("Posa el nom del centre"),io.entrarText("Posa el telèfon del centre"),io.entrarText("Posa l'email del centre"),io.entrarText("Posa la localitat del centre"),io.entrarText("Posa l'adreça del centre"));
      comptadorCentres++;
    }
    return centres;
  }

  /* Elimina els instituts */
  public Institut[] eliminarCentre(Institut[] centres, BibliotecaIO io) {
    boolean trobat = false;
    String nomCentre = io.entrarText("Posa el nom de l'institut");
    for(int i = 0; i < comptadorCentres; i++){
      //Si troba la coincidència, envia l'element al final i l'elimina
      if(centres[i].nom.equalsIgnoreCase(nomCentre)){
        int j = i;
        for(; j < comptadorCentres; j++){
          centres[j] = centres[j+1];
        }
        centres[j] = null;
        trobat = true;
        comptadorCentres--;
      }
    }
    io.mostrarCoincidencia(trobat);
    return centres;
  }

  /* Modifica els instituts */
  public Institut[] modificarCentre(Institut[] centres, BibliotecaIO io, int opcio) {
    String modificat = io.entrarText("Escriu l'opció a modificar");
    String nomNou = "";
    System.out.println(opcio + "sasas");
    for(int i = 0; i < comptadorCentres; i++) {
      if(centres[i].nom.equalsIgnoreCase(modificat) && opcio == 1) {
        nomNou = io.entrarText("Posa el nom nou");
        centres[i].nom = nomNou;
      }
      else if(centres[i].telefon.equalsIgnoreCase(modificat) && opcio == 2) {
        nomNou = io.entrarText("Posa el telèfon nou");
        centres[i].telefon = nomNou;
      }
      else if(centres[i].email.equalsIgnoreCase(modificat) && opcio == 3) {
        nomNou = io.entrarText("Posa el email nou");
        centres[i].email = nomNou;
      }
      else if(centres[i].localitat.equalsIgnoreCase(modificat) && opcio == 4) {
        nomNou = io.entrarText("Posa la localitat nova");
        centres[i].localitat = nomNou;
      }
      else if(centres[i].adresa.equalsIgnoreCase(modificat) && opcio == 5) {
        nomNou = io.entrarText("Posa l'adreça' nova");
        centres[i].adresa = nomNou;
      }
    }
    return centres;
  }

  /*  Llista els instituts*/
  public static void llistarCentre(Institut[] centres){
    boolean coincidencia = false;
    BibliotecaIO.llistaBuida(comptadorCentres);//Mira si hi ha algun element.
    for(int i = 0; i < comptadorCentres; i++){
      System.out.println(centres[i].nom + " " + centres[i].telefon + " "  + centres[i].email + " "  + centres[i].localitat + " "  + centres[i].adresa);
    }
  }

}
