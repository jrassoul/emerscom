<?php  
function passwordHash($str){
    $st = sha1(md5($str));
    return $st;
  }
/* function dateDiff($date1, $date2){
    $diff = abs($date1 - $date2); // abs pour avoir la valeur absolute, ainsi éviter d'avoir une différence négative
    $retour = array();
 
    $tmp = $diff;
    $retour['second'] = $tmp % 60;
 
    $tmp = floor( ($tmp - $retour['second']) /60 );
    $retour['minute'] = $tmp % 60;
 
    $tmp = floor( ($tmp - $retour['minute'])/60 );
    $retour['hour'] = $tmp % 24;
 
    $tmp = floor( ($tmp - $retour['hour'])  /24 );
    $retour['day'] = $tmp;
 
    return $retour;
}*/
function NbJours($debut, $fin) {

      $tDeb = explode("-", $debut);
      $tFin = explode("-", $fin);

      $diff = mktime(0, 0, 0, $tFin[1], $tFin[2], $tFin[0]) - 
              mktime(0, 0, 0, $tDeb[1], $tDeb[2], $tDeb[0]);
      
      return(($diff / 86400)+1);

    }
?>