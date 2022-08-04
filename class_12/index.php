<?php
// datt function day name
echo "this day name".date('D')."<br>";
echo "this day name".date('l')."<br>";
echo "this day name".date('N')."<br>";
echo "this day name".date('N')."<br>";
echo "this day name".date('w')."<br><br>";
//month name show
echo "this month is ".date("F")."<br><br>";

//date full format 
echo "this day ful format".date('d/m/y')."<br>";
echo "this day ful format".date('j/M/Y')."<br>";
echo "this day ful format".date('jS/M/Y')."<br>";


// echo date('z')."<br>";// show day of year
// echo date('L');// show lep year
// echo date('w');// show week of year

// date_create () function


$date = date_create("12-11-2022 12:23:29");

echo date_format($date,"j/M/Y H:m:s")."<br>";


 

// get function 
$date = mktime(0,0,0,02,15,2015);
echo "<pre>";
print_r(getdate($date));
echo "</pre>";


echo "<pre>";
print_r(gettimeofday());
echo "</pre>";

$date = mktime(0,0,0,02,15,2015);
echo "<pre>";
print_r(localtime($date,true));
echo "</pre>";













?>