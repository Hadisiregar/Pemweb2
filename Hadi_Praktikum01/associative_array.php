<?php
//memebuat attay associative
$profileArray = [
    "nama" => "Hadi Siregar",
    "kelas" => "SI14"
];
print_r($profileArray);

$profileMultiArray =[
    [
        'nama' => 'Siti',
        'kelas' => 'XTKJ2'
    ], [
        'nama' => 'Sri',
        'kelas' => 'XITKR3'
    ], [
        'nama' => 'Ahmad',
        'keals' => 'XIRPL3'
    ]
];


echo "<br>";
foreach($profileMultiArray as $profile){
    echo $profile['nama'] . "<br>";
}