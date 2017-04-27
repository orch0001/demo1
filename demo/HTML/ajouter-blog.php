<?php 
require 'include/db.php';
// on teste si le visiteur a soumis le formulaire
if (isset($_POST) ) 
{

   if(isset($_FILES['image']))
{ 
     $target="HTML/upload/".basename($_FILES['image']['name']);
     $image=$_FILES['image']['name'];

     move_uploaded_file($_FILES[" image "][" tmp_name "], $target);
     if( move_uploaded_file($_FILES[" image "][" tmp_name "], $target)){
     	echo "bien placer";
     }
                try
                {
                    $req = $bdd->prepare("INSERT INTO blog (titre,texte, image) VALUE(:titre, :texte, '$image' )");
                    $req->bindParam(':titre', $_POST['titre']);
                    $req->bindParam(':texte', $_POST['texte']);
                    $req->execute();
                }                
                catch(Exception $e)
                {
                    die('Erreur : ' . $e->getMessage());
                }
               
        
    }
}else
    $erreur = 'Erreur de formulaire.';

if(isset($erreur))
    echo $erreur;
header('Location: /demo/html/ajouter-blog.php');
?>