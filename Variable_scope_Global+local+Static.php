<?php 
//Global Variable
$FavCol = "Greeen";
echo $FavCol ;
echo "<br>";

//local Variable
function Local_Variable(){
    Global $FavCol;
    echo $FavCol;
};
Local_Variable();

//static variable
function age(){
    echo "<br>";
    static $age = 1;
    echo $age;
    $age++;
}
age();
age();
age();
?>