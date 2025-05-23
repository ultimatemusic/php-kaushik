<?php
// types of date function
// date
// mktime
// strtotime

// date
// echo   "date of today".date("d,m,Y")."<br>";

// mktime
$day=mktime(0,0,0,date("m"),date("d"),date("Y"));
echo "today date is:".date("d/m/Y",$day);

$day=mktime(0,0,0,date("m"),date("d"),date("Y"));
echo "today date is:".date("d/m/Y",$day);

$day=mktime(0,0,0,date("m"),date("d"),date("Y"));
echo "today date is:".date("d/m/Y",$day);
?>