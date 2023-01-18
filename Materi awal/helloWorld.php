<?php

// echo "Benar : ";
// var_dump(true);
 
// echo "Salah : ";
// var_dump(false);

// echo <<<str
// aaaadsds,
// fdsfsdfsdf
// str;
// echo "\n";
// $alamat="aaaa";

// echo"gfgfg $alamat";

// echo"\n";

// var_dump($alamat);

// unset($alamat);
// var_dump(isset($alamat));
echo "\n";

$arr=[1,2,3,4,5,6,7,8,9,10];
$arr2 = array(1,2,3,4,5,6,7,8,9,10);

var_dump($arr);
echo "\n";

var_dump($arr[3]);

$arr2[0]= 17;
var_dump($arr2);

$arr2[]= 12;
// var_dump($arr2);
echo count($arr2);
echo "\n";

$map = array (
    "nama" => "aziz",
    "umur" => "20",
    "alamat" => "batam"
);

var_dump($map);

echo "\n";

$data_diri = array(
    "nama" => "batam",
    "umur" => "20",
    "alamat" => array(
        ""
    )
    
)

?>