<?php
$arrayBuah = ["Anggur","Jeruk","Pepaya","Pisang","Durian"];

// mengurutkan value dari array
sort($arrayBuah);

// menghapus value dari array yang terakhir
array_pop($arrayBuah);

// menghapus spesifik value pada array
unset($arrayBuah [0]);


// menambahkan value pada array di bagian belakang
array_push($arrayBuah, "Semangka");

// menghapus value dari array yang di depan
array_shift($arrayBuah);

// menambahkan value pada array di bagian depan
array_unshift($arrayBuah, "Kedondong");

// mengubah value array tertentu
$arrayBuah[2] = "Alpukat";

foreach($arrayBuah as $buah){
    echo $buah . "<br>";
}