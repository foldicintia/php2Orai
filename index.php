<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vezérlési szerkezetek</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Vezérlési szerkezetek</h1>
    <?php
        echo "<h2>Véletlen számok</h2>";
        echo "Paraméter nélküli véletlen szám: ".rand()."<br>";
        echo "A véletlen szám maximuma: ".getrandmax()."<br>";
        echo "Zárt intervallumbeli véletlen szám: ".rand(10,20)."<br>";
        echo "<h2>Globális változók</h2>";
        $x= 7;
        $y = 6;
        $k;
            
        function myTest0() {
            $x=1;
            $y=2;
            // kezdoertek nelkul nem működik:
            $z = $x + $y;
            echo "A lokális változók  $x és a $y össszege: $z <br>";
            // működik:
            $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
            echo "A globális változók " .$GLOBALS['x']. "és a ".$GLOBALS['y']. "össszege:" .$GLOBALS['z']."<br>";

        }
        myTest0();
        echo "<h2>Operátorok</h2>";
        $adat1=8/3;
        echo "8/3 eredménye: $adat1 <br>";
        echo "8/3 adattipusa:".gettype($adat1)."<br>";

        echo "<h2>Elágazások</h2>";
        $logikai1 = (5==0);
        echo "5 egyenlő 0-val?<br>";
        echo ($logikai1 ? 'Ez igaz.' : 'Ez hamis. <br>');
        if($logikai1){
            echo 'Ez igaz.<br>';
        }else{
            echo 'Ez hamis.<br>';
        }
        echo "<br>";
            $szam= rand(-1,1);
            echo "A véletlen szám: $szam<br>";
            switch ($szam) {
                case -1:
                    echo "A szám negatív";
                    break;
                case 0:
                    echo "A szám nulla";
                    break;
                default:
                    echo "A szám positív";
                    break;
            }

        echo "<h2>Ciklusok</h2>";
        $tomb = array(1,2,3);
        //foreach
        foreach($tomb as $ertek){
            echo $ertek. '<br>';
        }
        $asszTomb = array("Szandi " => 10, "István" => 20);
        foreach($asszTomb as $kulcs => $ertek){
            echo "$kulcs: $ertek <br>";
        }


        // Hozz létre egy 5 elemű tömböt véletlen számokkal (20 és 30 közötti zárt intervallumban), majd írasd ki az összegüket!
        for ($index1 = 0; $index1 < 5; $index1++) { 
            $szam = rand(20, 30);
            array_push($tomb, $szam);
        }

        echo "A tömb elemei: ";
        print_r($tomb);
        echo "<br>";
        
        $osszeg = 0;
        for ($index1 = 0; $index1 < count($tomb); $index1++) { 
            $osszeg += $tomb[$index1];
        }
        echo "A tömb elemeinek összege: $osszeg <br> ";
 
    ?>
    
</body>
</html>