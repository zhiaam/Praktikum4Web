<?php
    $data = [
        ["no" => "1", "nama" => "Ridho", "matkuls" => [
                ["matkul" => "Pemrograman I", "sks" => 2], 
                ["matkul" => "Praktikum Pemrograman I", "sks" => 1],
                ["matkul" => "Pengantar Lahan Basah", "sks" => 2],
                ["matkul" => "Arsitektur Komputer", "sks" => 3]   
            ]
        ],
        ["no" => "2", "nama" => "Ratna", "matkuls" => [
                ["matkul" => "Basis Data I", "sks" => 2], 
                ["matkul" => "Praktikum Basis Data I", "sks" => 1],
                ["matkul" => "Kalkulus", "sks" => 3]   
            ]
        ],
        ["no" => "3", "nama" => "Tono", "matkuls" => [
                ["matkul" => "Rekayasa Perangkat Lunak", "sks" => 3], 
                ["matkul" => "Analisis dan Perancangan Sistem", "sks" => 3],
                ["matkul" => "Komputasi Awan", "sks" => 3],
                ["matkul" => "Kecerdasan Bisnis", "sks" => 3]   
            ]
        ]
    ];
    
    for ($i=0; $i < count($data); $i++){
        $total = 0;
        for ($j=0; $j < count($data[$i]['matkuls']); $j++){
            $total = $total + $data[$i]['matkuls'][$j]['sks'];
        }
        $data[$i]['skstotal'] = $total;
        if ($data[$i]['skstotal'] < 7){
            $data[$i]['ket'] = "Revisi KRS";
        } else {
            $data[$i]['ket'] = "Tidak Revisi";
        }
    }

    // print("<pre>".print_r($data,true)."</pre>");

    echo "<table border='1' style='border-collapse: collapse'>";
    echo "<tr style='background-color: lightgrey'>
        <th>No</th>
        <th>Nama</th>
        <th>Mata Kuliah diambil</th>
        <th>SKS</th>
        <th>Total SKS</th>
        <th>Keterangan</th></tr>";

    for ($i=0; $i < count($data); $i++){
        for ($j=0; $j < count($data[$i]['matkuls']); $j++){
        echo "<tr>";
        if ($j == 0){
        echo "<td>".$data[$i]['no']."</td>
                <td>".$data[$i]['nama']."</td>
                <td>".$data[$i]['matkuls'][$j]['matkul']."</td>
                <td>".$data[$i]['matkuls'][$j]['sks']."</td>
                <td>".$data[$i]['skstotal']."</td>";
                if($data[$i]['ket']=="Revisi KRS"){
                    echo "<td style='background-color: red';>".$data[$i]['ket']."</td>";
                } else {
                    echo "<td style='background-color: green';>".$data[$i]['ket']."</td>";
                }
        } else {
            echo "<td></td>
                <td></td>
                <td>".$data[$i]['matkuls'][$j]['matkul']."</td>
                <td>".$data[$i]['matkuls'][$j]['sks']."</td>
                <td></td>
                <td></td>";
        }
        echo "</tr>";
        }
    }
    echo "</table>";
?>