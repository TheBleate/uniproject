/**
* Grup: 1
* Membres: David Falcó, Anwar El Khattabi, Cristian Diac i Joaquín Bernaltes
*/

package gestio;
import bibliotecaIO.BibliotecaIO;
public class Empresa {
  /* Atributs*/
  public String nom;
  public String telefon;
  public String email;
  public String localitat;
  public String adresa;
  private static int comptadorEmpreses = 0;

  /* Constructor */
  public Empresa(){
  }
  
  public Empresa(String nom, String telefon, String email, String localitat, String adresa){
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
	* Retorna el valor de comptadorEmpreses
	* @return
	*/
	public static int getComptadorEmpreses() {
		return comptadorEmpreses;
	}

  /**
	* Actualitza el valor de comptadorEmpreses
	*/
	public static void setComptadorEmpreses(int comptadorEmpreses) {
  	Empresa.comptadorEmpreses = comptadorEmpreses;
	}

  /* Mètodes */
  /* Crea les diferents empreses */
  public Empresa[] crearEmpresa(Empresa[] empreses, BibliotecaIO io) {
    if(BibliotecaIO.MAXIM == comptadorEmpreses){
      System.out.println("S'ha arribat al màxim d'emmatgemament");
    }
    else{
      empreses[comptadorEmpreses] = new Empresa(io.entrarText("Posa el nom de l'empresa"),io.entrarText("Posa el telèfon de l'empresa"),io.entrarText("Posa l'email de l'empresa"),io.entrarText("Posa la localitat de l'empresa"),io.entrarText("Posa l'adreça de l'empresa"));
      comptadorEmpreses++;
    }
    return empreses;
  }

  /* Elimina els instituts */
  public Empresa[] eliminarEmpresa(Empresa[] empreses, BibliotecaIO io) {
    boolean trobat = false;
    String nomEmpresa = io.entrarText("Posa el nom de l'empresa");
    for(int i = 0; i < comptadorEmpreses; i++){
      //Si troba la coincidència, envia l'element al final i l'elimina
      if(empreses[i].nom.equalsIgnoreCase(nomEmpresa)){
        int j = i;
        for(; j < comptadorEmpreses; j++){
        empreses[j] =empreses[j+1];
        }
        empreses[j] = null;
        trobat = true;
        comptadorEmpreses--;
      }
    }
    io.mostrarCoincidencia(trobat);
    return empreses;
  }

  /* Modifica les empreses */
  public Empresa[] modificarEmpresa(Empresa[] empreses, BibliotecaIO io, int opcio) {
    String modificat = io.entrarText("Escriu l'opció a modificar");
    String nomNou = "";
    for(int i = 0; i < comptadorEmpreses; i++) {
      if(empreses[i].nom.equalsIgnoreCase(modificat) && opcio == 1) {
        nomNou = io.entrarText("Posa el nom nou");
        empreses[i].nom = nomNou;
      }
      else if(empreses[i].telefon.equalsIgnoreCase(modificat) && opcio == 2) {
        nomNou = io.entrarText("Posa el telèfon nou");
        empreses[i].telefon = nomNou;
      }
      else if(empreses[i].email.equalsIgnoreCase(modificat) && opcio == 3) {
        nomNou = io.entrarText("Posa el email nou");
        empreses[i].email = nomNou;
      }
      else if(empreses[i].localitat.equalsIgnoreCase(modificat) && opcio == 4) {
        nomNou = io.entrarText("Posa la localitat nova");
        empreses[i].localitat = nomNou;
      }
      else if(empreses[i].adresa.equalsIgnoreCase(modificat) && opcio == 5) {
        nomNou = io.entrarText("Posa l'adreça' nova");
        empreses[i].adresa = nomNou;
      }
    }
    return empreses;
  }

  /*  Llista les empreses */
  public static void llistarEmpresa(Empresa[] empreses){
    boolean coincidencia = false;
    BibliotecaIO.llistaBuida(comptadorEmpreses);//Mira si hi ha algun element.
    for(int i = 0; i < comptadorEmpreses; i++){
      System.out.println(empreses[i].nom + " " + empreses[i].telefon + " "  + empreses[i].email + " "  + empreses[i].localitat + " "  + empreses[i].adresa);
    }
  }

}
