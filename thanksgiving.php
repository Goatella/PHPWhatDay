<?php 
 //This gets today's date 
 $date =time () ;

 //This makes the current year a variable 
 $year = date('Y', $date) ;

 //Here we generate the first day of November
 $first_day = mktime(0,0,0,11, 1, $year) ;

 //We determine what day of the week the first falls on
 $day_of_week = date('D', $first_day) ;

 //Based upon this, we add the appropriate number of days to get to the forth Thursday of the month

 switch($day_of_week){ 
 case "Sun": $add = 25; break;
 case "Mon": $add = 24; break; 
 case "Tue": $add = 23; break; 
 case "Wed": $add = 22; break; 
 case "Thu": $add = 21; break; 
 case "Fri": $add = 27; break; 
 case "Sat": $add = 26; break; 
 }

 $Thanks = 1 + $add;

 echo "This year, $year, Thanksgiving Day falls on 11/$Thanks.";
 ?> 
