<form action="form_cat_sport.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
        <td>Nom du produit</td>
        <td><input type="text" name="nom"></td>
        </tr>
        
        <tr>
        <td>description:</td>
        <td><textarea name="description" rows="10" cols="30">description </textarea></td>
        </tr>
        
        <tr>
        <td>prix</td>
        <td><input type="number" name="prix" step="0.01"></td>
        </tr>
        
        <tr>
        <td>Photo</td>
        <td><input type="file" name="photo" id="fichier_a_uploader"></td>
        </tr>
        
        <tr>
        <td>quantite</td>
        <td><input type="number" name="quantite" min="1" max="10000"></td>
        </tr>
        
        
        
                
         <tr>
        <td>marque</td>
        <td><input type="text" name="marque"></td>
        </tr>

        <tr>
        <td>nom activité</td>
        <td><input type="text" name="nomactivite"></td>
        </tr>

        <tr>
        <td>poids (gramme)</td>
        <td><input type="number" name="poid" min="0" value="0" ></td>
        </tr>
               
        <tr>
        <td colspan="2" align="center">
        <input type="submit" name="additem" value="valider"></td>
        </tr>        

        
        
    </table>
</form>

<?php
///code pour l'image
// Constantes
define('TARGET', 'picsbook/');    // Repertoire cible
define('MAX_SIZE', 100000);    // Taille max en octets du fichier
define('WIDTH_MAX', 800);    // Largeur max de l'image en pixels
define('HEIGHT_MAX', 800);    // Hauteur max de l'image en pixels
 
// Tableaux de donnees
$tabExt = array('jpg','gif','png','jpeg');    // Extensions autorisees
$infosImg = array();
 
// Variables
$extension = '';
$message = '';
$nomImage = '';


//recuperer les données venant de la page HTML
//le parametre de $_POST = "name" de <input> de votre page HTML
$nom = isset($_POST["nom"])? $_POST["nom"] : "";
$description = isset($_POST["description"])? $_POST["description"] : "";
$prix = isset($_POST["prix"])? $_POST["prix"] : "";
$categorie = 3;
$namepic = md5(uniqid());

$marque = isset($_POST["marque"])? $_POST["marque"] : "";
$nomactivite = isset($_POST["nomactivite"])? $_POST["nomactivite"] : "";
$poid = isset($_POST["poid"])? $_POST["poid"] : "";



$quantite = isset($_POST["quantite"])? $_POST["quantite"] : "";

//identifier votre BDD
$database = "projettest";
//connectez-vous dans votre BDD
//Rappel: votre serveur = localhost et votre login = root et votre password = <rien>
$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);

if (isset($_POST['additem'])) { 
    if ($db_found) {
        
        
        if(!empty($_POST))
        {
          // On verifie si le champ est rempli
          if( !empty($_FILES['photo']['name']) )
          {
            // Recuperation de l'extension du fichier
            $extension  = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
              
            $url = "http://localhost/projet/test_projet/picsbook/".$namepic.'.'.$extension;  

            // On verifie l'extension du fichier
            if(in_array(strtolower($extension),$tabExt))
            {
              // On recupere les dimensions du fichier
              $infosImg = getimagesize($_FILES['photo']['tmp_name']);

              // On verifie le type de l'image
              if($infosImg[2] >= 1 && $infosImg[2] <= 14)
              {
                // On verifie les dimensions et taille de l'image
                if(($infosImg[0] <= WIDTH_MAX) && ($infosImg[1] <= HEIGHT_MAX) && (filesize($_FILES['photo']['tmp_name']) <= MAX_SIZE))
                {
                  // Parcours du tableau d'erreurs
                  if(isset($_FILES['photo']['error']) 
                    && UPLOAD_ERR_OK === $_FILES['photo']['error'])
                  {
                    // On renomme le fichier
                    $nomImage = $namepic .'.'. $extension;

                    // Si c'est OK, on teste l'upload
                    if(move_uploaded_file($_FILES['photo']['tmp_name'], TARGET.$nomImage))
                    { //echo($auteur.$nom);  
                      $message = 'Upload réussi !';
                      $sql = "INSERT INTO items(nom, photo, descri, prix,categorie,quantite)
                      VALUES('$nom', '$url', '$description', '$prix','$categorie','$quantite')";
                      $result=mysqli_query($db_handle, $sql);
                      if(mysqli_query($db_handle,$sql))
                      {
                       $id=mysqli_insert_id($db_handle);   
                       echo($id);   
                      }
                      
                      ///fin id    
                      $sql2 = "INSERT INTO sport(id, categorie,marque,nomactivite,poid)
                      VALUES('$id', '$categorie', '$marque', '$nomactivite','$poid')";
                      $result2=mysqli_query($db_handle, $sql2);   
                      echo "Add successful." . "<br>";    
                    }
                    else
                    {
                      // Sinon on affiche une erreur systeme
                      $message = 'Problème lors de l\'upload !';
                    }
                  }
                  else
                  {
                    $message = 'Une erreur interne a empêché l\'uplaod de l\'image';
                  }
                }
                else
                {
                  // Sinon erreur sur les dimensions et taille de l'image
                  $message = 'Erreur dans les dimensions de l\'image !';
                }
              }
              else
              {
                // Sinon erreur sur le type de l'image
                $message = 'Le fichier à uploader n\'est pas une image !';
              }
            }
            else
            {
              // Sinon on affiche une erreur pour l'extension
              $message = 'L\'extension du fichier est incorrecte !';
            }
          }
          else
          {
            // Sinon on affiche une erreur pour le champ vide
            $message = 'Veuillez remplir le formulaire svp !';
          }
        }
        
        
        
       
         
        }
     else {
        echo "Database not found";
        }
                              
}
echo($message);

//fermer la connexion
mysqli_close($db_handle);
   
?>