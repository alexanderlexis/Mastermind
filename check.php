<?php 
    include 'credentials.php';
            
            
    $master = "SELECT `col1`, `col2`, `col3`, `col4` FROM `master` WHERE id=1;";
    $masterCode = $conn->query($master);
                
        while($row = $masterCode->fetch_assoc()){
            $masterArray = [$row['col1'], $row['col2'], $row['col3'], $row['col4']];
            print_r($masterArray);
        }
        
    $allTries = "SELECT `col1`, `col2`, `col3`, `col4` FROM `try` WHERE 1;";
    $results = $conn->query($allTries);

        while($row = $results->fetch_assoc()){
            $arrayGuess = [$row['col1'], $row['col2'], $row['col3'], $row['col4']];
            print_r($arrayGuess);
        }
        
    if ($arrayGuess === $masterArray){
        echo "<h1>Je hebt gewonnen!</h1>";
    } else {
        echo "<h2>Helaas, probeer nog een keer</h2>";
    }
                