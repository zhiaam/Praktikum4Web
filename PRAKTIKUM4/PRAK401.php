<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK401</title>
</head>
<body>
    

    <form action="" method="POST">
        Panjang: <input type="text" name="baris"><br>
        Lebar: <input type="text" name="kolom"><br>
        Nilai: <input type="text" name="nilai"><br>
        <button type="submit" name="submit">Cetak</button>
    </form> 

    <br>

    <?php
        if (isset($_POST['submit'])){
            if (empty($_POST["baris"]) && empty($_POST["kolom"])) {
                echo "Anda belum memasukan jumlah baris dan kolom";
            }
            
            else if (empty($_POST["baris"])) {
                echo "Anda belum memasukan jumlah baris";
            }

            else if (empty($_POST["kolom"])) {
                echo "Anda belum memasukan jumlah kolom";
            }
            
            else{
                $b = $_POST["baris"];
                $k = $_POST["kolom"];

                $nilai = $_POST["nilai"];
                $arrn = explode(" ", $nilai);

                $c = count($arrn);
                $c2 = $b*$k;

                if($c != $c2){
                    echo "Panjang nilai tidak sesuai dengan ukuran matriks";
                } else{
                    $arrn2 = array_chunk($arrn, $k);
                
                    echo "<table border ='1' style='border-collapse: collapse'>";
                    for ($i=0; $i < $b; $i++) { 
                        echo "<tr>";
                        for ($j=0; $j < $k; $j++) { 
                            echo "<td>".$arrn2[$i][$j]."</td>";
                        }
                        echo "</tr>";
                    }
                    echo "</table>";
                }                
            }
        }
    ?> 
</body>
</html>