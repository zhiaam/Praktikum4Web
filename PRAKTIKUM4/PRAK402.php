<?php
    $data = [
        ["nama" => "Andi", "nim" => "2101001", "nuts" => 87, "nuas" => 65],
        ["nama" => "Budi", "nim" => "2101002", "nuts" => 76, "nuas" => 79],
        ["nama" => "Tono", "nim" => "2101003", "nuts" => 50, "nuas" => 41],
        ["nama" => "Jessica", "nim" => "2101004", "nuts" => 60, "nuas" => 75]
    ];

    for ($i=0; $i < count($data); $i++) {
        $data[$i]["na"] = ($data[$i]["nuts"]*40/100)+($data[$i]["nuas"]*60/100);
        if($data[$i]["na"] >= 80){
            $data[$i]["huruf"] = "A";
        } else if($data[$i]["na"] <= 79 && $data[$i]["na"] >= 70){
            $data[$i]["huruf"] = "B";
        } else if($data[$i]["na"] <= 69 && $data[$i]["na"] >= 60){
            $data[$i]["huruf"] = "C";
        } else if($data[$i]["na"] <= 59 && $data[$i]["na"] >= 50){
            $data[$i]["huruf"] = "A";
        } else if($data[$i]["na"] < 50){
            $data[$i]["huruf"] = "E";
        } else{
            $data[$i]["huruf"] = "F";
        }
    }

    echo "<table border='1' style='border-collapse: collapse'>";
    echo "<tr style='background-color: lightgrey'><th>Nama</th>
        <th>NIM</th>
        <th>Nilai UTS</th>
        <th>Nilai UAS</th>
        <th>Nilai Akhir</th>
        <th>Huruf</th></tr>";

    for ($i=0; $i < count($data); $i++){
        echo "<tr>";
        echo "<td>".$data[$i]['nama']."</td>
                <td>".$data[$i]['nim']."</td>
                <td>".$data[$i]['nuts']."</td>
                <td>".$data[$i]['nuas']."</td>
                <td>".$data[$i]['na']."</td>
                <td>".$data[$i]['huruf']."</td>";
        echo "</tr>";
    }
    echo "</table>";
    
?>