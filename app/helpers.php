<?php

function formTime($time,$price){
    if( $time<60){
        $r = ($time%60)."min: ".$price."€";
      } else if (($time%60)==0 ) {
        $r =  (floor( $time/60))."h: ".$price."€" ;
      } else {
        $r =  (floor( $time/60))."h".($time%60).": ".$price."€" ;
      }

      return $r;
}

function truncate($string, $value){
  return strip_tags(substr($string,0,$value).'...');
}


?>

