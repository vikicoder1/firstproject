<?php
/* $a =39;
$b=90;

if($a > 49){
    echo "a is greater than 49";
}
else {
    echo " a is is not greate than 49";
}*/

//$age=9;

/*if($age > 18){
    echo "You can drink alcohol";
}
elseif($age > 10){
    echo "You can drink chai ";

}
else{
    echo "You can't drink chai and alcohol";
}*/

/*if($age > 20){
    echo "You can drink alcohol";
}
elseif($age > 10){
    echo "You can drink chai ";

}
elseif(5 > $age ){
    echo "You are a kid";
}
elseif($age > 5){
    echo "You'r kiddo";
}
else{
    echo "You can't drink chai and alcohol <br>";
}*/

//Write a program to allow a driver to drive only when his age is greater than 25 and less than 65?
 $age= 65;
if(65 >= $age && $age >= 25)
{
    echo "You can drive";
}
else{
    echo "You are not elligible to drive";
}

//Another way 
echo "<br>";

$driverAge = 30;

if ($driverAge > 25) {
    if ($driverAge < 65) {
        echo "Driver age $driverAge is eligible to drive.\n";
    } else {
        echo "Driver age $driverAge is not eligible to drive.\n";
    }
} else {
    echo "Driver age $driverAge is not eligible to drive.\n";
}
echo "<br>";
//or another way

$driverAge = 10;

if ($driverAge < 65) {
    if ($driverAge >25 ) {
        echo "Driver age $driverAge is eligible to drive.\n";
    } else {
        echo "Driver age $driverAge is not eligible to drive.\n";
    }
} else {
    echo "Driver age $driverAge is not eligible to drive.\n";
}

?>

