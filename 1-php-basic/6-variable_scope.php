<?php
system("clear");
// GLOBAL 
// $gg = "this is global \n";
// echo $GLOBALS['gg'];

// function run(){
//     // return $GLOBALS['gg'];

//     global $gg;
//     return $gg;
// }
// echo run();

// LOCAL 
// function run(){
//     $ll = "this is local \n";
//     return $ll;
// }
// echo run();
// echo $ll; maya par 

// STATIC
// function counter(){
//     $n=1;
//     echo $n;
//     $n++;
//     echo $n;
// }
// // ram htl hmr ma thein htr pay buu ta khu a lote lote pee yin mula tan pho ka nay pyn sa 
// echo counter();
// echo counter();
// echo counter();
// echo counter();

// function counter(){
//     static $n=1;
//     echo $n;
//     $n++;
// }
// // ram htl hmr ma thein htr chin yin static use pay
// echo counter();
// echo counter();
// echo counter();
// echo counter();

function run(){
    static $aa = 1;
    echo $aa;
    $aa ++;
    echo $aa;
}
echo run();
echo run();
echo run();
echo run();
?>
