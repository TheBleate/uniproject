
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
    <title>Pujada d'arxius</title>
    <?php
    //dades de l'arxiu
    $nom_arxiu = $_FILES['userfile']['name'];
    $tipus_arxiu = $_FILES['userfile']['type'];
    $tamany_arxiu = $_FILES['userfile']['size'];

    //comprovo si les característiques dels arxius són les que desitjo
    if (!((strpos($tipus_arxiu, "gif") || strpos($tipus_arxiu, "jpeg") || strpos($tipus_arxiu, "png")) && ($tamany_arxiu < 100000))) { //strpos(): Troba la posició de la primera ocurrència de un substring en un string
        echo "L'extenció o el tamany dels arxius no es correcta. <br><br><table><tr><td><li>Es permeten arxius .gif o .jpg<br><liEs permeten arxius de 100 Kb màxim.</td></tr></table>";
    }else{
        if (move_uploaded_file($_FILES['userfile']['tmp_name'],  "../../pujades/$nom_arxiu")){ //Move uploaded file serveix per a moure l'arxiu a una posició definitiva.
            echo "L'arxiu s'ha carregat correctament.";
        }else{
            echo "S'ha produït un error al penjar l'arxiu. No s'ha pogut guardar.";
        }
    }
    ?>
</head>
<body>
<ul>
    <button onclick="location.href = '../../gestio.html';">Sortir</button>
</ul>
</body>
</html>
