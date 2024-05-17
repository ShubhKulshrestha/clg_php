// array in Php
$arr = array("Summer","rainy","winter");
for ($i=0;$i<3;$i++){
    echo $arr[$i]."\n";
}
// for each loop in array
$arr = array("jack"=>"sara","troy" =>"ria","jim" =>"mary");
foreach($arr as $key => $keyvalue)
echo "husband is ".$key." wife is ".$keyvalue ."\n";

 // multidimensional array 
$cars = array(array("bmw",20,5),array("audi",22,6),array("rangerover",15,3),array("mercedes",25,7));
for($i=0;$i<4;$i++){
    for($j=0;$j<3;$j++){
        echo $cars[$i][$j]." ";
    }
    echo "\n";
}
