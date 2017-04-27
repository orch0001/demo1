<?php 
require 'include/db.php';
// on teste si le visiteur a soumis le formulaire
if (isset($_POST) ) 
{
    // on teste l'existence de nos variables. On teste également si elles ne sont pas vides
  
                try
                {
                    $req = $bdd->prepare('INSERT INTO formation (titre,texte,type,pdf,video,image) VALUE(:titre,:texte, :type, :pdf, :video ,  :imgformation )');
                    $req->bindParam(':titre', $_POST['titre']);
                    $req->bindParam(':texte', $_POST['texte']);
                    $req->bindParam(':type', $_POST['type']);
                    $req->bindParam(':pdf', $_POST['pdf']);
                    $req->bindParam(':video', $_POST['video']);
                    $req->bindParam(':imgformation', $_POST['imgformation']);
                    $req->execute();
                }                
                catch(Exception $e)
                {
                    die('Erreur : ' . $e->getMessage());
                }
               
        
    }else
    $erreur = 'Erreur de formulaire.';

if(isset($erreur))
    echo $erreur;
header('Location: /demo/html/admin-formation.php');
?>