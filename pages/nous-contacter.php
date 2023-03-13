<!DOCTYPE html>

<html>
    <head>
        <title>Nolark:Nous contacter</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/polices/nous-contacter.css"/>
        
    </head>
    <body>
       <header>
        </header>
    <center> <nav>
            <ul>
            <li><a href="../public_html/index.php">Accueil</a></li>
            <?php 
           include('C:\wamp64\www\Nolark\php\header.php');
     ?>
            </ul>
        </nav></center>
   
       <form id="form_contact" method="post" action="http://btssio.bonaparte.free.fr/testforms.php">  
    <fieldset id="coordo">
        <legend>Pour mieux vous connaitre</legend>
        <p><center>
            <label for="i_nom">Votre nom:</label>
            <input type="text" name="Nom" id="i_nom" size="35" required/><br><br>
            <label for="i_prénom">Votre Prénom:</label>
            <input type="text" name="Prénom" id="i_prénom" size="35" required/><br><br>
            <label for="i_email">Votre e-mail:</label>
            <input type="email" name="Mail" size="35" id="i_email"/><br><br>
            <label for="i_url">Votre url: </label>
            <input type="url" name="Url" size="35"/><br><br>
            <label id="i_name">Vous êtes:</label>
            <select name="Statut" id="1st_typeclient">
                <option value="1">Etudiant</option>
                <option value="2">Salarié du privé</option>
                <option value="3">Salarié du public</option>
                <option value="4">Chef d'entreprise</option>
                <option value="5">Journaliste</option>
                <option value="6">Professionnel(le) du casque</option>
                 <option value="99">Autre</option>
            </select><br><br>
            <label> Votre date de naissance:</label>
            <input type="number" name="Jour" id="num_jour" min="1" max="31"/>
            <input type="number" name="Mois" id="num_mois" min="1" max="12"/>
            <input type="number" name="Année" id="num_jour" min="1990" max="2050"/>
            <fieldset id="sc">
                <legend>Vos marques préférés:</legend>
                
                <table>   
               <!-- 1ère ligne --> 
               <tr>
             <td> 
            <input type="checkbox" name="chk_marques[]" id="chk_agv" value="agv"/>Agv</td>
             <td> 
             <input type="checkbox" name="chk_marques[]" id="chk_bell" value="Bell"/>Bell</td>
             <td>
              <input type="checkbox" name="chk_marques[]" id="chk_caberg" value="Caberg"/>Caberg</td>
             <td> 
              <input type="checkbox" name="chk_marques[]" id="chk_Darts" value="Darts"/>Darts</td>
             <td>
                 <input type="checkbox" name="chk_marques[]" id="chk_Falco" value="Falco"/>Falco</td>
            </tr>
                <!-- 2ème ligne -->
            <tr>
             <td>
              <input type="checkbox" name="chk_marques[]" id="chk_Givi" value="Givi"/>Givi</td>
             <td>
            <input type="checkbox" name="chk_marques[]" id="chk_Heltsons" value="Heltsons"/>Heltson</td>
             <td>
              <input type="checkbox" name="chk_marques[]" id="chk_Ica" value="Ica"/>Ica</td>
             <td>
             <input type="checkbox" name="chk_marques[]" id="chk_Kenny" value="Kenny"/>Kenny</td>
             <td>
                 <input type="checkbox" name="chk_marques[]" id="chk_Airoh" value="Airoh"/>Airoh</td>
            </tr>
              <!-- 3ème ligne -->
            <tr>
             <td>
                    <input type="checkbox" name="chk_marques[]" id="chk_Bering" value="Bering"/>Bering</td>
            <td>
                <input type="checkbox" name="chk_marques[]" id="chk_Cameron" value="Cameron"/>Cameron</td>
            <td>
                <input type="checkbox" name="chk_marques[]" id="chk_Dg" value="Dg"/>Dg</td>
            <td> 
                <input type="checkbox" name="chk_marques[]" id="chk_Fox" value="Fox"/>Fox</td>
            <td>
                <input type="checkbox" name="chk_marques[]" id="chk_Gpa" value="Gpa"/>Gpa</td>
            </tr>
            <!-- 4ème ligne -->
             <tr>
             <td>
                    <input type="checkbox" name="chk_marques[]" id="chk_Bering" value="Bering"/>Bering</td>
            <td>
                <input type="checkbox" name="chk_marques[]" id="chk_Cameron" value="Cameron"/>Cameron</td>
            <td>
                <input type="checkbox" name="chk_marques[]" id="chk_Dg" value="Dg"/>Dg</td>
            <td> 
                <input type="checkbox" name="chk_marques[]" id="chk_Fox" value="Fox"/>Fox</td>
            <td>
                <input type="checkbox" name="chk_marques[]" id="chk_Gpa" value="Gpa"/>Gpa</td>
            </tr>
            <!-- 5ème ligne -->
             <tr>
             <td>
                    <input type="checkbox" name="chk_marques[]" id="chk_Bering" value="Bering"/>Bering</td>
            <td>
                <input type="checkbox" name="chk_marques[]" id="chk_Cameron" value="Cameron"/>Cameron</td>
            <td>
                <input type="checkbox" name="chk_marques[]" id="chk_Dg" value="Dg"/>Dg</td>
            <td> 
                <input type="checkbox" name="chk_marques[]" id="chk_Fox" value="Fox"/>Fox</td>
            <td>
                <input type="checkbox" name="chk_marques[]" id="chk_Gpa" value="Gpa"/>Gpa</td>
            </tr>
     
      </table>
                <br>
                <label for="i_color">Choisissez votre couleur préférée:</label>
                <input type="color">
            
       </fieldset>   
       
           
            
        </center>
        
    </fieldset>
    
    <fieldset id="Barre">
        <legend>Motif du contact</legend>
        
        <input type='radio'>
        <label>Demande d'information</label><br><br>
        <input type="radio">
        <label>Réclamation</label><br><br>
        <input type="radio">
        <label>Satisfaction</label><br><br>
        <input type="radio">
        <label>suivi pédagogique</label><br><br>
        <input type="radio">
        <label>Publicité</label><br><br>
        <input type="radio">
        <label>Autre</label><br>
        <p>Si "Autre" veuillez préciser :</p>
        <div id="commentaire"><input type="text"/> 
        </div>
        <input type="reset" value="Effacer" style="margin-top:65px; float:right;"/>
        <input type="button" value="Envoyer" id="btn_envoyer"/>
     </fieldset>
    </form>
  
 <?php
                include('C:\wamp64\www\Nolark\php\footer.php');
                ?>
 <script src="../javascript/Moncode.js"></script>
    </body>
</html>
