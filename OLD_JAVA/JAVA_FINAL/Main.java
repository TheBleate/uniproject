/**
* Grup: 1
* Membres: David Falcó, Anwar El Khattabi, Cristian Diac i Joaquín Bernaltes
*/
import bibliotecaIO.BibliotecaIO;
import gestio.*;

public class Main {
  public static void main(String[] args) {
    String[] opcions = {"Gestionar Institut", "Gestionar Empresa", "Gestionar Incidència", "Gestionar Categoria", "Sortir"};
    BibliotecaIO es = new BibliotecaIO();
    Institut centre = new Institut();
    Institut[] centres = new Institut[BibliotecaIO.MAXIM];
    Empresa empresa = new Empresa();
    Empresa[] empreses = new Empresa[BibliotecaIO.MAXIM];
    Incidencia incidencia = new Incidencia();
    Incidencia[] incidencies = new Incidencia[BibliotecaIO.MAXIM];
    Categoria categoria = new Categoria();
    Categoria[] categories = new Categoria[BibliotecaIO.MAXIM];
    int opcio = 0;
    do{
      es.imprimirMenu(opcions);
      opcio = es.escollirOpcio(opcions);
      switch(opcio){
        case 1://Gestionar Institut
          String[] opcionsInstitut = {"Alta Institut", "Baixa Institut", "Modificar Institut", "Llistar Institut"};
          es.imprimirMenu(opcionsInstitut);
          int opcioGestio = es.escollirOpcio(opcions);
          /* L'usuari escull una opció de CRUD de l'institut */
          switch(opcioGestio){
            case 1://Alta Institut
              centre.crearCentre(centres, es);
              break;
            case 2://Baixa Institut
              centre.eliminarCentre(centres, es);
              break;
            case 3://Modificar Institut
              String[] opcionsModificarInstitut = {"Modificar nom Institut", "Modificar telèfon Institut", "Modificar email Institut", "Modificar localitat Institut", "Modificar adreça Institut"};
              es.imprimirMenu(opcionsModificarInstitut);
              opcio = es.escollirOpcio(opcionsModificarInstitut);
              centre.modificarCentre(centres, es, opcio);
              break;
            case 4://Llistar Institut
              Institut.llistarCentre(centres);
              break;
          }
          break;
        case 2://Gestionar Empresa
          String[] opcionsEmpresa = {"Alta Empresa", "Baixa Empresa", "Modificar Empresa", "Llistar Empresa"};
          es.imprimirMenu(opcionsEmpresa);
          int opcioEmpresa = es.escollirOpcio(opcionsEmpresa);
          /* L'usuari escull una opció de CRUD de l'institut */
          switch(opcioEmpresa){
            case 1://Alta Empresa
              empresa.crearEmpresa(empreses, es);
              break;
            case 2://Baixa Empresa
              empresa.eliminarEmpresa(empreses, es);
              break;
            case 3://Modificar Empresa
              String[] opcionsModificarEmpresa = {"Modificar nom Empresa", "Modificar telèfon Empresa", "Modificar email Empresa", "Modificar localitat Empresa", "Modificar adreça Empresa"};
              es.imprimirMenu(opcionsModificarEmpresa);
              opcio = es.escollirOpcio(opcionsModificarEmpresa);
              empresa.modificarEmpresa(empreses, es, opcioEmpresa);
              break;
            case 4://Llistar Empresa
              Empresa.llistarEmpresa(empreses);
              break;
          }
          break;
        case 3://Gestionar Incidència
          String[] opcionsIncidencia = {"Alta Incidència", "Baixa Incidència", "Modificar Incidència", "Llistar Incidència"};
          es.imprimirMenu(opcionsIncidencia);
          int opcioGestioIncidencia = es.escollirOpcio(opcions);
          /* L'usuari escull una opció de CRUD d'una incidència */
          switch(opcioGestioIncidencia){
            case 1://Alta Incidència
              incidencia.crearIncidencia(incidencies, es);
              break;
            case 2://Baixa Incidència
              incidencia.eliminarIncidencia(incidencies, es);
              break;
            case 3://Modificar Incidència
              String[] opcionsModificarIncidencia = {"Modificar nom Incidència", "Modificar descripció Incidència"};
              es.imprimirMenu(opcionsModificarIncidencia);
              opcio = es.escollirOpcio(opcionsModificarIncidencia);
              incidencia.modificarIncidencia(incidencies, es, opcio);
              break;
            case 4://Llistar Incidència
              Incidencia.llistarIncidencia(incidencies);
              break;
            }
          break;
        case 4://Gestionar Categoria
          String[] opcionsCategoria = {"Alta Categoria", "Baixa Categoria", "Modificar Categoria", "Llistar Categoria"};
          es.imprimirMenu(opcionsCategoria);
          int opcioGestioCategoria = es.escollirOpcio(opcionsCategoria);
          /* L'usuari escull una opció de CRUD de la categoria */
          switch(opcioGestioCategoria){
            case 1://Alta Categoria
              categoria.crearCategoria(categories, es);
              break;
            case 2://Baixa Categoria
              categoria.eliminarCategoria(categories, es);
              break;
            case 3://Modificar Categoria
              String[] opcionsModificarCategoria = {"Modificar nom Categoria", "Modificar tipus Categoria"};
              es.imprimirMenu(opcionsModificarCategoria);
              opcio = es.escollirOpcio(opcionsModificarCategoria);
              categoria.modificarCategoria(categories, es, opcio);
              break;
            case 4://Llistar Categoria
              Categoria.llistarCategoria(categories);
              break;
            }
          break;
        case 5://Sortir
          break;
      }
    } while(opcio != 5);

  }

}
