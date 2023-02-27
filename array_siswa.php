<?php
$ns1 = ['id' => 1, 'nama' => 'Hadi', 'nim' => '01101', 'uts' => 80, 'uas' => 84, 'tugas' => 78];
$ns2 = ['id' => 2, 'nama' => 'Dimas', 'nim' => '01121', 'uts' => 70, 'uas' => 50, 'tugas' => 68];
$ns3 = ['id' => 3, 'nama' => 'Kamila', 'nim' => '01130', 'uts' => 60, 'uas' => 86, 'tugas' => 70];
$ns4 = ['id' => 4, 'nama' => 'iqbal', 'nim' => '01134', 'uts' => 90, 'uas' => 91, 'tugas' => 82];
$ns5 = ['id' => 5, 'nama' => 'Dea', 'nim' => '01143', 'uts' => 55, 'uas' => 95, 'tugas' => 80];
$ns6 = ['id' => 6, 'nama' => 'Alika', 'nim' => '01154', 'uts' => 80, 'uas' => 85, 'tugas' => 85];
$ns7 = ['id' => 7, 'nama' => 'Fahmi', 'nim' => '01165', 'uts' => 75, 'uas' => 75, 'tugas' => 90];
$ns8 = ['id' => 8, 'nama' => 'Jalil Rambe', 'nim' => '01176', 'uts' => 92, 'uas' => 88, 'tugas' => 75];

$ar_nilai = [$ns1, $ns2, $ns3, $ns4, $ns5, $ns6, $ns7, $ns8];

?>

<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body id="grad1">
<h1 class="animate-character">Daftar Nilai Mahasiswa</h1>
<table>
    <thead>
        <tr>
            <th>No</th><th>Nama</th><th>NIM</th><th>UTS</th>
            <th>UAS</th><th>Tugas</th><th>Nilai Akhir</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $nomor = 1;
        foreach($ar_nilai as $ns){
            echo '<tr><td>'.$nomor.'</td>';
            echo '<td>'.$ns['nama'].'</td>';
            echo '<td>'.$ns['nim'].'</td>';
            echo '<td>'.$ns['uts'].'</td>';
            echo '<td>'.$ns['uas'].'</td>';
            echo '<td>'.$ns['tugas'].'</td>';
            $nilai_akhir = ($ns['uts'] + $ns['uas'] + $ns['tugas'])/3;
            echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
            echo '<tr/>';
            $nomor++;
        }
        ?>
    </tbody>
</table>
</body>
</html>