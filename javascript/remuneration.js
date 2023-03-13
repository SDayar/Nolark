/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/javascript.js to edit this template
 */
/*premier simulateur*/
window.addEventListener("load", function(){
    window.document.querySelector("#btn_calculer").addEventListener("click", function(){
      const fixe=1100;
      var nbAncien=parseInt(window.document.querySelector("#NbA").value);
      var nbS20=parseInt(window.document.querySelector("#NbS20").value);
      var nbXS=parseInt(window.document.querySelector("#NbxS").value);
      var nbMulti=parseInt(window.document.querySelector("#NbMul").value);
      var nbkm=parseInt(window.document.querySelector("#NbKm").value);
    var tabInputs = window.document.querySelectorAll("input");
    for (i=0; i<tabInputs.length; i++){
        tabInputs[i].addEventListener("keyup", function(){
            
        }, false);
    }
      
      var remuneration = fixe+ recupPrimeAnciennete(nbAncien, fixe) + recupComS20(nbS20) + recupComXS(nbXS)+recupComMulti(nbMulti)+recupComKm(nbkm);
      window.document.querySelector("#remuneration").style.color="rgba(50,200,50)";
      window.document.querySelector("#remuneration").style.fontSize="25px";
     window.document.querySelector("#remuneration").innerHTML ="La rémunération sera de : "+remuneration+"€";
     /*La première fonction sur l'ancienneté*/
     function recupPrimeAnciennete(nb, fixe){
         var nul=0;
         const nbAncienMin = 5;
         const nbAncienSup = 10;
         const txAncienMin = 0.03;
         const txAncienSup = 0.06;
       if (nb >= nbAncienSup){
           return fixe*txAncienSup;
       }
       else if(nb >= nbAncienMin){
           return fixe*txAncienMin;
       }
       else{
           return nul ;
       }
     }
     /*La deuxième fonction sur la comission du modèle S20 */
     function recupComS20(nb){
         const prixS20 = 140;
         const txComS20 = 0.02;
         return nb*prixS20*txComS20;
     }
     /*La troisième fonction sur la comission du modèle X-Spirit*/
     function recupComXS(nb){
         var nul=0;
         const prixXS=350;
         const nbXSMinCom=50;
         const txComXS=0.06;
         var sous=nb-nbXSMinCom;
       if (nb>= nbXSMinCom){
           return sous*prixXS*txComXS;
       }
       else {
           return nul;
       }
       }
       /*Dernière fonction sur la comission du modèle Multitec*/
       function recupComMulti(nb){
           const prixMu = 180;
           const nbMultiT1 = 20;
           const nbMultiT2 = 50;
           const txMultiT1 = 0.04;
           const txMultiT2 = 0.06;
           const txMultiT3 = 0.1;
         if(nb <= nbMultiT1){
             return nb*prixMu*txMultiT1;
         }
         else if( nb<= nbMultiT2){
              return (nbMultiT1*prixMu*txMultiT1)+((nb-nbMultiT1)* prixMu*txMultiT2);  
         }
         else {
             return  (nbMultiT1*prixMu*txMultiT1)+((nbMultiT2-nbMultiT1)* prixMu*txMultiT2)+((nb-nbMultiT2)*prixMu*txMultiT3);
         }
           
       }
   /*La fonction reliée au kilomètres parcourus*/
   function recupComKm(nb){
       const nul = 0;
       const indemnite_km=0.15;
       const ind_mens= indemnite_km*nb;
       if(ind_mens<350){
           return ind_mens;
       }
       else {
           return nul ;
       }
   }
      
    }, false);
    
    }, false);
    /*Deuième simulateur*/
    window.addEventListener("load", function(){
     window.document.querySelector("#btn_prime").addEventListener("click", function(){
   const  anc=window.document.querySelector("#anneerevolue").value;  
   const  dist=window.document.querySelector("#distanceparcourue").value;
   const  accident=window.document.querySelector("#accidents").value;
   
   
   function anciennete(nb){
       const nul=0;
       
       const diff= anc-4;
   
   if(anc===4){
     return nb= 300;
   } 
   else if( anc>4){
       return nb= 300+30*diff;
   }
  else { return nul;}
   }
   function distance(nb){
       const nul=0;
       const prime_dist=nb*0.01;
   if(prime_dist<=900){
     return prime_dist;
   } 
  else { return nul;}
   }
   prime=distance(dist)+anciennete(anc);
   if(accident=="0"){
        window.document.querySelector("#prime").style.color="rgba(50,50,200)";
      window.document.querySelector("#prime").style.fontSize="20px";
   window.document.querySelector("#prime").innerHTML="la prime qui rassemble celle de la distance et de l'ancienneté est de :" + prime+ "€";  
   }
   else if (accident=="1"){
       window.document.querySelector("#prime").style.color="rgba(50,50,200)";
      window.document.querySelector("#prime").style.fontSize="20px";
   window.document.querySelector("#prime").innerHTML="la prime qui rassemble celle de la distance et de l'ancienneté est de :" + prime/2+ "€";   
   }
   else if(accident=="2"){
          window.document.querySelector("#prime").style.color="rgba(50,50,200)";
      window.document.querySelector("#prime").style.fontSize="20px";
   window.document.querySelector("#prime").innerHTML="la prime qui rassemble celle de la distance et de l'ancienneté est de :" + prime/3+ "€";
   }
   else if(accident=="3"){
          window.document.querySelector("#prime").style.color="rgba(50,50,200)";
      window.document.querySelector("#prime").style.fontSize="20px";
   window.document.querySelector("#prime").innerHTML="la prime qui rassemble celle de la distance et de l'ancienneté est de :" + prime/4+ "€";
   }
   else{
   window.document.querySelector("#prime").style.color="rgba(50,50,200)";
      window.document.querySelector("#prime").style.fontSize="20px";
   window.document.querySelector("#prime").innerHTML="Votre prime a été anulée en raison de nombres importants d'accidents.Soyez plus vigilant !"}
   },false);
    },false);
    /*Troisième simulateur*/
    window.addEventListener("load", function(){
     window.document.querySelector("#btn_alcool").addEventListener("click", function(){
      const masculin=0.7;
      const feminin=0.6;
      verre=window.document.querySelector("#Nbredeverres").value;
      poidspur=window.document.querySelector("#poids").value;
      function calc_alcool(alc){
       if(window.document.querySelector("#Masc").checked){
          return  alc=(verre*10)/(poidspur*masculin);
       }
       else if(window.document.querySelector("#Femin").checked){
          return alc=(verre*10)/(poidspur*feminin);
      }
      
      else {; return alert("Veuillez cocher un genre !");}
       
  }
  const nb=calc_alcool();
  
   
      if(0.5<nb && nb<0.8){
          window.document.querySelector("#boirealc").style.color="rgb(243, 236, 27)";
                window.document.querySelector("#boirealc").style.fontSize="25px";
          window.document.querySelector("#boirealc").innerHTML= "Votre taux d'alcoolémie est évalué à :"+nb+"g/l. Vous risquez d'avoir une amende minorée(90€), forfaitaire(135€) ou bien majorée(375€). "+" Les sanctions que vous encourez sont: "+" 6 points et une supension de 3ans";
       }
       else if(nb===0){
          window.document.querySelector("#boirealc").style.color="rgb(243, 236, 27)";
                window.document.querySelector("#boirealc").style.fontSize="25px";
          window.document.querySelector("#boirealc").innerHTML= "Votre taux d'alcoolémie est évalué à :"+nb+"g/l.Cette quantité est considérée comme normale ou modérée. Continuez ainsi !";
       }
       
       else if( nb>0.8){
           window.document.querySelector("#boirealc").style.color="rgb(243, 236, 27)";
                 window.document.querySelector("#boirealc").style.fontSize="25px";
           window.document.querySelector("#boirealc").innerHTML= "Votre taux d'alcoolémie est évalué à :"+nb+"g/l. Vous risquez une amende de 4500€. Les sanctions que vous encourez sont: 6 points, 2ans de prison, une suspension de 3ans et un stage de sensibilisation.";
       }
       else{
           window.document.querySelector("#boirealc").style.color="rgb(243, 236, 27)";
                 window.document.querySelector("#boirealc").style.fontSize="25px";
           window.document.querySelector("#boirealc").innerHTML= "Réessayez et saisissez correctement toutes les informations nécessaires !";
       }
  
     }, false);
        
    }, false);
    


