/**
* Grup: 1
* Membres: David Falcó, Anwar El Khattabi, Cristian Diac i Joaquín Bernaltes
*/

package gestio;
import java.util.Date;
import bibliotecaIO.BibliotecaIO;
public class Incidencia {
  private String nom;
  private String descripcio;
  private Date registreData = new Date();
  private static int comptadorIncidencies = 0;

  /* Constructor */
  public Incidencia() {
  }
  public Incidencia(String nom, String descripcio, Date registreData) {
    this.nom = nom;
    this.descripcio = descripcio;
    this.registreData = registreData;
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
	* Retorna el valor de descripcio
	* @return
	*/
	public String getDescripcio() {
		return descripcio;
	}

	/**
	* Actualitza el valor de descripcio
	*/
	public void setDescripcio(String descripcio) {
		this.descripcio = descripcio;
	}

	/**
	* Retorna el valor de registreData
	* @return
	*/
	public Date getRegistreData() {
		return registreData;
	}

	/**
	* Actualitza el valor de registreData
	*/
	public void setRegistreData(Date registreData) {
		this.registreData = registreData;
	}

	/**
  * Retorna el valor de comptadorIncidencies
	* @return
	*/
	public static int getComptadorIncidencies() {
		return comptadorIncidencies;
	}

	/**
	* Actualitza el valor de comptadorIncidencies
	*/
	public static void setComptadorIncidencies(int comptadorIncidencies) {
		Incidencia.comptadorIncidencies = comptadorIncidencies;
	}

  /* Crea la incidència*/
  public Incidencia[] crearIncidencia(Incidencia[] incidencies, BibliotecaIO io) {
    if(BibliotecaIO.MAXIM == comptadorIncidencies){
      System.out.println("S'ha arribat al màxim d'emmatgemament");
    }
    else{
      incidencies[comptadorIncidencies] = new Incidencia(io.entrarText("Posa el nom de la incidència"),io.entrarText("Posa la descripció de la incidència"), registreData);
      comptadorIncidencies++;
    }
    return incidencies;
  }

  /* Elimina les incidències*/
  public Incidencia[] eliminarIncidencia(Incidencia[] incidencies, BibliotecaIO io) {
    boolean trobat = false;
    String nomCentre = io.entrarText("Posa el nom de la incidència");
    for(int i = 0; i < comptadorIncidencies; i++){
      //Si troba la coincidència, envia l'element al final i l'elimina
      if(incidencies[i].nom.equalsIgnoreCase(nomCentre)){
        int j = i;
        for(; j < comptadorIncidencies; j++){
          incidencies[j] = incidencies[j+1];
        }
        incidencies[j] = null;
        trobat = true;
        comptadorIncidencies--;
      }
    }
    io.mostrarCoincidencia(trobat);
    return incidencies;
  }
  /* Modifica les incidències */
  public Incidencia[] modificarIncidencia(Incidencia[] incidencies, BibliotecaIO io, int opcio) {
    String modificat = io.entrarText("Escriu l'opció a modificar");
    String nomNou = "";
    for(int i = 0; i < comptadorIncidencies; i++) {
      if(incidencies[i].nom.equalsIgnoreCase(modificat) && opcio == 1) {
        nomNou = io.entrarText("Posa el nom nou");
        incidencies[i].nom = nomNou;
      }
      else if(incidencies[i].descripcio.equalsIgnoreCase(modificat) && opcio == 2) {
        nomNou = io.entrarText("Posa la nova descripció");
        incidencies[i].descripcio = nomNou;
      }
    }
    return incidencies;
  }
  /*  Llista les incidències*/
  public static void llistarIncidencia(Incidencia[] incidencies){
    boolean coincidencia = false;
    BibliotecaIO.llistaBuida(comptadorIncidencies);//Mira si hi ha algun element.
    for(int i = 0; i < comptadorIncidencies; i++){
      System.out.println(incidencies[i].nom + " " + incidencies[i].descripcio + " "  + incidencies[i].registreData);
    }
  }

}
