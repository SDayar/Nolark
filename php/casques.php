<?php
$cnx= new PDO('mysql:host=127.0.0.1;dbname=nolark','nolarkuser','nolarkpwd');
$req = 'SELECT casque.id, nom, modele, libelle, prix, classement, image, stock';
$req .=' FROM casque INNER JOIN type ON casque.type=type.id ';
$req .=             'INNER JOIN marque ON casque.marque = marque.id';
$req .=' WHERE libelle= "'.substr($pageActuelle,0, -4). '"';

$res = $cnx->query($req);
while($ligne = $res->fetch(PDO::FETCH_OBJ)){
    echo '<article>';
    echo '<img src="../images/casques/',$ligne->libelle,'/',$ligne->image,'"alt="',$ligne->modele,'"/>';
   if($ligne->stock<5&&$ligne->stock>0){
       echo '<p style="  float:left; font-size:20px; color:red;">',$ligne->prix,'€','</p>','<p>','<p style="float:right;"class="stockko"><abbr data-tip="Il ne reste plus que '.$ligne->stock.' casques.">Stock</abbr></p>';
   }
   elseif($ligne->stock<=0){
       echo '<p style="  float:left;font-size:20px; color:red;">',$ligne->prix,'€','</p>','<p>','<p style="float:right;" class="stockko"><abbr data-tip="Stock épuisé">Stock</abbr></p>';
         
    }
   else{
      echo '<p style=" float:left;font-size:20px; color:red;">',$ligne->prix,'€','</p>','<p>','<p style="float:right;" class="stockok"><abbr data-tip="',$ligne->stock.' casques sont disponnibles.">Stock</abbr></p>';  
   }
  echo '<p style="font-size:25px; font-family:cursive;">',$ligne->nom,'</p>';
  echo '<p style="font-size:20px; font-family:cursive;">',$ligne->modele,'</p>';
  
  echo '</article>';
}

