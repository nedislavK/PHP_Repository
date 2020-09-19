<?php
echo "Hello World";
echo "<br>";
$Username = "Nedislav";
$Age = 22;
$bool = True;
$Array = ["String",22];
$AssocArray = ["Username"=>$Username,"Age"=>$Age];
for ($i = 0; $i < 2; $i++){
    echo $Array[$i];
};
echo "<br>";
foreach($AssocArray as $Elements){
  echo $Elements;
};

echo "<br>";
echo $Username;
echo "<br>";
echo $Age;
echo "<br>";
echo $bool;
echo "<br>";
echo $Array[0];
echo "<br>";
echo $Array[1];
echo "<br>";
echo $AssocArray["Username"];
