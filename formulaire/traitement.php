<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
try{

			//connection à la base de donnée
		include ('connexion.php');
		//$db=new PDO('mysql:host=localhost;dbname=school;charset=utf8','root','');
		//insertion des valeurs dans la base de donnée
		$rep=$db->prepare('INSERT INTO clients(NOM,PRENOM,ADRESSE,VILLE,CODE_POSTAL) values (:prenom,:nom,:adresse,:ville,:code_postal)');
		//$rep->execute(array($prenom,$nom,$adresse,$ville,$codepostal));
		//affichage des données recuperées
		include ('affiche.php');

 // Minimum de "sécurité" avant de traiter les données du formulaire
 function securisation($info){
                $info = trim($info);
                $info = stripslashes($info);
                $info = strip_tags($info);
                return $info;
          }


          $nom = securisation($_POST['prenom']);
          $prenom = securisation($_POST['nom']);
          $adresse = securisation($_POST['adresse']);
          $ville = securisation($_POST['ville']);
          $code = securisation($_POST['codepostal']);

		  $rep->bindParam(':prenom',$prenom);
		  $rep->bindParam(':nom',$nom);
		  $rep->bindParam(':adresse',$adresse);
		  $rep->bindParam(':ville',$ville);
		  $rep->bindParam(':code_postal',$code);

		  $resultat = $rep->execute();

		  if($resultat){
		     header('Location: affiche.php');
		  }else{
		     header('Location: erreur.php');

		  }

		         
		}catch(PDOException $e){
		  echo 'Erreur!!! '.$e->getMessage();
		  echo 'Echec de la connexion avec la base de donnée';
		}




?>



</body>
</html>