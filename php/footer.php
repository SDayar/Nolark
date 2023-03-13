<?php
setlocale(LC_TIME,"fr-FR");
date_default_timezone_set("Europe/paris");
$texte='@Nolark 2022 Made by Saifidine Dayar. Page ouverte le ';
$val = '<footer><center>'.$texte.strftime("%A  %e %B %Y vers %T").'</center></footer>';
echo utf8_encode("$val");
//Par rapport au codage en javascript, la méthode php n'est pas la plus adaptée lorsque le site est utilisé à un niveau internatiional. En php on peut définir qu'un seul fuseau horraire qui suit une localisation bien définie. Alors qu'avec javascript, la fonction date() permet de obtenir automatiquement des dates et des heures variées suivant la localisation du terminal dans lequel le site a été ouvert.//




