<!DOCTYPE html>

<html>
    <head>
        <title>Nolark</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
header{
    background-image: url("../css/polices/images/banniere.png");
    background-repeat:no-repeat;
    background-attachment:scroll;
    background-position:center 10px;
    height:180px;
   
}
form{
                margin-top:50px;
                width:65%;
                margin-left:250px;
            }
legend{
                text-align:center;
                font-size:20px;
                margin-top:10px
            }
            .label:first-child{
                margin-top:2px;
            }
 footer{
  border:thin solid black;
  position:fixed;
  width:100%;
  background-color:gray;
  bottom:0px;
  
 }



nav li{
    display:inline;
    font-size:150%;
}
nav li a{
    padding:3px;
    color:white;
    background-color:black;
    text-decoration:none;
    font-weight:bold;
    }
    
    nav li a:hover{color:black;
    background-color: white;}
    @media screen and (max-device-width:768px){
header{ background-image: none; width: auto; margin: 0; height:0;}
nav{ margin-top: 0;}
nav ul{margin-left: 0; margin-top: 0; padding-left: 0;}
nav li a { display: block;
margin-top: 1px;
height: 25px;
padding: 1px;}
form{
    margin-top:1px;
    margin:auto;
    width:auto;
}

}
.detache{
    margin-bottom:30px;
}
            
        </style>
    </head>
    <body>
         <header>
           </header>
        <center> <nav>
            <ul>
           
   <?php 
           include('C:\wamp64\www\Nolark\php\header.php');
     ?>
     
            </ul>
            </nav></center>

            <form>
                <center>
                    <h2 style="color:lightslategrey; ">Simulateur de calcul pour la force de vente itinérante:</h2><br>
                <fieldset>
           <legend>Vos résultats:</legend>
        <label>Nombre d'ancienneté:</label>
        <input type="number" id="NbA"/><hr><br><br>
        <label>Nombre de S20 vendus :</label>
        <input type="number" id="NbS20"/><hr><br><br>
        <label>Nombre de X-Spirit vendus:</label>
        <input type="number" id="NbxS"/><hr><br><br>
        <label>Nombre de Multitec vendus:</label>
        <input type="number" id="NbMul"/><hr><br><br>
        <label>Distance parcourue:</label>
        <input type="number" id="NbKm"/>
         </fieldset>
         </form>
    <article id="remuneration"></article><br>
    <input type="button" value="Calculer votre rémunération" id="btn_calculer"/> <input type="reset" value="Effacer les données"/></center> <hr>
    <!-- Deuxième simulateur -->
    <form>
        <center>
          <h2 style="color:lightslategrey; ">Simulateur de calcul pour la prime de fin d'année:</h2><br>
           <fieldset>
           <legend>Vos résultats:</legend>
        <label>Année révolues:</label>
        <input type="number" id="anneerevolue"/><hr><br><br>
        <label>Distance parcourue (en Km):</label>
        <input type="number" id="distanceparcourue"/><hr><br><br>
         <label>Accidents responsables:</label>
        <input type="number" id="accidents"/>
       </fieldset>
         </form>
     <article id="prime"></article><br>
     <input type="button" value="Calculer votre prime" id="btn_prime"/> <input type="reset" value="Effacer les données"/></center><hr>
     <!-- Troisième simulateur -->
     <form class="detache">
        <center>
          <h2 style="color:lightslategrey; ">Simulateur de calcul de l'alcoolémie:</h2><br>
           <fieldset>
           <legend>Vos résultats:</legend>
           <label>Genre:</label>
           <input type="radio" id="Masc"/>M
           <input type="radio" id="Femin"/>F<hr><br><br>
           <label>*Type et quantité d'alcool(par unité)</label>
           <select>
               <option>25cl de bière à 5°C</option>
               <option>10cl de champagne à 12°C</option>
               <option>10cl de vin rouge à 12°C</option>
               <option>2.5cl de pastis à 45°C</option>
               <option>7cl de apéritif à 18°C</option>
               <option>2.5cl de Whisky à 45°C</option>
               <option>2.5cl de digestif à 45°C</option>
           </select><hr><br><br>
        <label>Nombre verres:</label>
        <input type="number" id="Nbredeverres"/><hr><br><br>
        <label>Poids (en Kg):</label>
        <input type="number" id="poids"/>
        <p style="color:gray; font-size:14px;">*Une unité d'alcool équivaut à 10g d'alcool</p>
       </fieldset>
         </form>
     <article id="boirealc"></article><br>
     <input type="button" value="Taux d'alcoolémie et risques " id="btn_alcool"/> <input type="reset" value="Effacer les données"/></center>
     
                <script src="../javascript/remuneration.js"></script>
                <?php
                include('C:\wamp64\www\Nolark\php\footer.php');
                ?>
    </body>
</html>
