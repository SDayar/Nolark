<?php     $scriptName = filter_input(INPUT_SERVER, "SCRIPT_NAME");
          $pageActuelle = substr($scriptName, strrpos($scriptName,"/") + 1);
          if($pageActuelle == "index.php"){
           $dirIndex = " ";
           $dirPages = "../pages/";
           } else{
              $dirIndex ="../public_html/";
              $dirPages ="";
                 }
             $pages = array(
               "Accueil"=>$dirIndex . "index.php",
               "Route"=>$dirPages."route.php",
               "Cross" =>$dirPages."cross.php",
               "Piste" =>$dirPages."piste.php",
               "Enfants" =>$dirPages."enfants.php",
               "La Team" =>$dirPages."LaTeam.php",
               "Nous-contacter" =>$dirPages."nous-contacter.php",
               "Simulateur" =>$dirPages."simulateur.php",
                 );
           foreach ($pages as $nom=>$url){
             echo "\n",'<li style="margin:2px;"><a href="', $url, '">', $nom, '</a></li>';
             }

