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
            echo "<h2 style = color:green;>Je hebt gewonnen!</h2>";
        } else {
            echo "<h2 style = color:red;>Helaas, probeer nog een keer</h2>";
        } 
    }
    
    if ($levens >= 10){
        ?><style>
            #patrick{
                background-image: url("imgs/patricklaughing.gif");
            }
            
</style><?php
    }
    
    
    
//        foreach ($guessArray as $guessKey=>$guessValue){
//            if (in_array($guessValue, $masterArray)){
//                echo "-Deze kleur zit in de master code ";
//            }
//        }
           
//        for($x = 0 ; $x < 4 ; $x++)
//        if ($guessArray[$x] == $masterArray[$x]){
//            echo '<div class="circle goed"></div>';
//        } elseif ($guessArray[$x] !==$masterArray[$x] && (in_array($guessArray[$x], $masterArray))){
//            echo '<div class="circle plek"></div>';
//        } else {
//            echo '<div class="circle fout"></div>';
//        }