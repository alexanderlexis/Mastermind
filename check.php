<?php 
    include 'credentials.php';
            
            
    $master = "SELECT `col1`, `col2`, `col3`, `col4` FROM `master` WHERE 1;";
    $masterCode = $conn->query($master);
                
        while($row = $masterCode->fetch_assoc()){
            $masterArray = [$row['col1'], $row['col2'], $row['col3'], $row['col4']];
        }
        
    $allTries = "SELECT `col1`, `col2`, `col3`, `col4` FROM `try` WHERE 1;";
    $results = $conn->query($allTries);

        while($row = $results->fetch_assoc()){
            $guessArray = [$row['col1'], $row['col2'], $row['col3'], $row['col4']];
        }
        
    if (isset($guessArray)){
        if ($guessArray === $masterArray){
            echo "<h1>Je hebt gewonnen!</h1>";
        } else {
            echo "<h2>Helaas, probeer nog een keer</h2>";
        }
    }
    
//        foreach ($guessArray as $guessKey=>$guessValue){
//            if (in_array($guessValue, $masterArray)){
//                echo "-Deze kleur zit in de master code ";
//            }
//        }
           
    $checkArray = array_intersect_assoc($masterArray, $guessArray);
    
    print_r($masterArray);
    echo "<br>";
    print_r($guessArray);
    echo "<br>";
    print_r($checkArray);