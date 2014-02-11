<?php
 $h = mktime(0, 0, 0, 2, 11, 2014);
 $d = date("F dS, Y", $h) ;
 $w= date("l", $h) ;
 Echo "$d is on a $w";
 ?>
