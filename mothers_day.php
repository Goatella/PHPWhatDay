<?php 

 //This gets today's date 

 $date =time () ;



  //This makes the current year a variable 

 $year = date('Y', $date) ;



  //Here we generate the first day of May

 $first_day = mktime(0,0,0,5, 1, $year) ;



  //We determine what day of the week the first falls on

 $day_of_week = date('D', $first_day) ;



  //Based upon this, we add the appropriate number of days to get to the second Sunday



 switch($day_of_week){ 

 case "Sun": $add = 7; break;

 case "Mon": $add = 13; break; 

 case "Tue": $add = 12; break; 

 case "Wed": $add = 11; break; 

 case "Thu": $add = 10; break; 

 case "Fri": $add = 9; break; 

 case "Sat": $add = 8; break; 

 }



 $Mom = 1 + $add;



 echo "This year, $year, Mother's Day falls on 5/$Mom.";

 ?> 
