<?php 
//This gets today's date 
$date =time () ;
//This makes the current year a variable 
$year = date('Y', $date) ;

//Here we generate the first day of October
$first_day = mktime(0,0,0,10, 1, $year) ;

//We determine what day of the week the first falls on
$day_of_week = date('D', $first_day) ;

//Based upon this, we add the appropriate number of days to get to the second Tuesday of the month

switch($day_of_week){ 
case "Sun": $add = 8; break; 
case "Mon": $add = 7; break; 
case "Tue": $add = 13; break; 
case "Wed": $add = 12; break; 
case "Thu": $add = 11; break; 
case "Fri": $add = 10; break; 
case "Sat": $add = 9; break; 
}

$Columbus = 1 + $add;

echo "This year, $year, Columbus day falls on 10/$Columbus.";
?>
