<?php
$age = 19; 
if($age < 18){
    echo "You are noy  Eligibal";
}else{
    echo "You are  Elagibal";
}
?>

<?php 
ECHO "<br>";
$city = "islamabD";
if($city == "karachi"){
    echo "karach i City";
}else if($city == "lahore"){
    echo "Lahore city";
}else{
    echo "Multan";
}
?> 


<?PHP
echo "<br>";
$friut = "";
switch($friut){
    case "Apple":
        echo "This Friut is Apple";
        break;

        case "banana":
            echo "This Friut is banana";
            break;

            default:
            echo "unknow Friut";
}
?>