<?php 
// two way to call a function
// a) call by value
// b) call by raferance
// a)

// function kaushik(){
//     echo "hello kaushik";
//  }
//  kaushik();

// b) call by raferance
function diaplay(&$nm)
{
    $fnm="my name is: ".$nm;
    echo $fnm;
}
$fname="kaushik";
diaplay($fname);
?>