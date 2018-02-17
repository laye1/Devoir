


<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

<?php

echo "<h1><p>BIENVENUE DANS LA LISTE DES PERSONNES ENRIGISTRES DANS NOTRE FORMULAIRE</p></h1>";
       include ('connexion.php');
       $reponse = $db->query('SELECT * FROM school');
         
        
        ?>
         
        <table border="1" width="1000">
                <tr>
                    <th>id</th>
                    <th>nom</th>
                    <th>prenom</th>
                    <th>adresse</th>
                    <th>ville</th>
                    <th>codepostal</th>
                    
                    
                                
                </tr>
                
            <?php
              while ($donnees = $reponse->fetch())
              {
            ?>
      
                <tr>
                     <td><?php echo $donnees['ID'];?></td>
                    <td><?php echo $donnees['PRENOM'];?></td>
                    <td><?php echo $donnees['NOM'];?></td>
                    <td><?php echo $donnees['ADRESSE'];?></td>
                    <td><?php echo $donnees['VILLE'];?></td>
                     <td><?php echo $donnees['CODE_POSTAL'];?></td>
                    
                    

                </tr>
           <?php
             } 

            ?>
            
        
        </table>
    </body>
</html>