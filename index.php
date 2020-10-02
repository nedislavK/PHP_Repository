<?php
//echo "Hello World";
//echo "<br>";
//$Username = "Nedislav";
//$Age = 22;
//$bool = True;
//$Array = ["String",22];
//$AssocArray = ["Username"=>$Username,"Age"=>$Age];
//for ($i = 0; $i < 2; $i++){
//    echo $Array[$i];
//};
//echo "<br>";
//foreach($AssocArray as $Elements){
//  echo $Elements;
//};
//
//echo "<br>";
//echo $Username;
//echo "<br>";
//echo $Age;
//echo "<br>";
//echo $bool;
//echo "<br>";
//echo $Array[0];
//echo "<br>";
//echo $Array[1];
//echo "<br>";
//echo $AssocArray["Username"];

//PZ2 2.10.2020
//$myNumber = 0;
//if($myNumber == 2){
//    echo"true";
//}elseif ($myNumber == 1){
//    echo"false";
//}else{
//    echo"false";
//}
//switch ($myNumber){
//    case $myNumber > 2;
//        echo "My number is greater than 2";
//        break;
//    case $myNumber == 1;
//        echo "My number is equal to 1";
//        break;
//    default:
//        echo "No match";
//        break;
//}

function modifyMyName($myName){
    echo "My name is ".$myName;
    $myName = "Pe6o";
    return $myName;
}

$myNewName = modifyMyName("Nedislav");
echo "My new name is ".$myNewName;

