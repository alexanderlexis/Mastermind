<?php
    include 'credentials.php';
    ?>
<html>
    <head>      
        <link rel="stylesheet" href="style.css">
        <script>
            function reset(){
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                if (this.readyState === 4 && this.status === 200) {
                    }
                };
                xhttp.open("GET", "reset.php", true);
                xhttp.send();
                document.location = "index.php";
            }
            function setMaster(){
                var mcol1 =  document.getElementById("mcol1").value;
                var mcol2 =  document.getElementById("mcol2").value;
                var mcol3 =  document.getElementById("mcol3").value;
                var mcol4 =  document.getElementById("mcol4").value;
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                if (this.readyState === 4 && this.status === 200) {
                    }
                };
                xhttp.open("GET", "updatemaster.php?mcol1="+mcol1+"&mcol2="+mcol2+"&mcol3="+mcol3+"&mcol4="+mcol4, true);
                xhttp.send();
            }
            function insert(){
                var col1 =  document.getElementById("col1").value;
                var col2 =  document.getElementById("col2").value;
                var col3 =  document.getElementById("col3").value;
                var col4 =  document.getElementById("col4").value;
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                if (this.readyState === 4 && this.status === 200) {
                    document.getElementById("searchResult").innerHTML = xhttp.responseText;
                    }
                };
                xhttp.open("GET", "insert.php?col1="+col1+"&col2="+col2+"&col3="+col3+"&col4="+col4, true);
                xhttp.send();
            }
        </script>
    </head>
    <body>
        <div id='patrick'> </div>
            <h1>Patrick's Mastermind</h1>
            <header> 
                <div>
                    <form id="master" class="form" action="index.php">
                        <select id="mcol1" name="mcol1" >
                            <option class="red" value="red">Red</option>
                            <option class="blue" value="blue">Blue</option>
                            <option class="yellow" value="yellow">Yellow</option>
                            <option class="green" value="green">Green</option>
                            <option class="purple" value="purple">Purple</option>
                            <option class="orange" value="orange">Orange</option>
                        </select>
                        <select id="mcol2" name="mco21" >
                            <option class="red" value="red">Red</option>
                            <option class="blue" value="blue">Blue</option>
                            <option class="yellow" value="yellow">Yellow</option>
                            <option class="green" value="green">Green</option>
                            <option class="purple" value="purple">Purple</option>
                            <option class="orange" value="orange">Orange</option>
                        </select>
                        <select id="mcol3" name="mcol3" >
                            <option class="red" value="red">Red</option>
                            <option class="blue" value="blue">Blue</option>
                            <option class="yellow" value="yellow">Yellow</option>
                            <option class="green" value="green">Green</option>
                            <option class="purple" value="purple">Purple</option>
                            <option class="orange" value="orange">Orange</option>
                        </select>
                        <select id="mcol4" name="mcol4" >
                            <option class="red" value="red">Red</option>
                            <option class="blue" value="blue">Blue</option>
                            <option class="yellow" value="yellow">Yellow</option>
                            <option class="green" value="green">Green</option>
                            <option class="purple" value="purple">Purple</option>
                            <option class="orange" value="orange">Orange</option>
                        </select>
                        <input type="submit" value="Set master >" onclick="setMaster()">
                        <?php
//                            $allTries = "SELECT `col1`, `col2`, `col3`, `col4` FROM `master` WHERE 1;";
//                            $results = $conn->query($allTries);
//                            while($row = $results->fetch_assoc()){
//                                echo '<br>';
//                                echo '<div class="circle  '.$row['col1'].'"></div>','<div class="circle  '.$row['col2'].'"></div>','<div class="circle  '.$row['col3'].'"></div>','<div class="circle  '.$row['col4'].'"></div>';
//                            }                  
                        ?>
                    </form>
                </div>
            </header>
            
            <div id="levens">
                <h2>Levens: </h2>
                <?php
                    $trys = $conn->query('SELECT `id` FROM `try` WHERE 1');
                    $levens = $trys->num_rows;
                    for ($L = 10 ; $levens < $L ; $L--){
                        echo '<img class="spons" src="imgs/spongebob.png"/>';
                    }
                ?>              
            </div>
        <div class="form">
        <form action="index.php">
            <select id="col1" name="col1" >
                <option class="red" value="red">Red</option>
                <option class="blue" value="blue">Blue</option>
                <option class="yellow" value="yellow">Yellow</option>
                <option class="green" value="green">Green</option>
                <option class="purple" value="purple">Purple</option>
                <option class="orange" value="orange">Orange</option>
            </select>
            <select id="col2" name="co21" >
                <option class="red" value="red">Red</option>
                <option class="blue" value="blue">Blue</option>
                <option class="yellow" value="yellow">Yellow</option>
                <option class="green" value="green">Green</option>
                <option class="purple" value="purple">Purple</option>
                <option class="orange" value="orange">Orange</option>
            </select>
            <select id="col3" name="col3" >
                <option class="red" value="red">Red</option>
                <option class="blue" value="blue">Blue</option>
                <option class="yellow" value="yellow">Yellow</option>
                <option class="green" value="green">Green</option>
                <option class="purple" value="purple">Purple</option>
                <option class="orange" value="orange">Orange</option>
            </select>
            <select id="col4" name="col4" >
                <option class="red" value="red">Red</option>
                <option class="blue" value="blue">Blue</option>
                <option class="yellow" value="yellow">Yellow</option>
                <option class="green" value="green">Green</option>
                <option class="purple" value="purple">Purple</option>
                <option class="orange" value="orange">Orange</option>
            </select>
            <input type="submit" value="Check je code >" onclick="insert()">
            <br>
        </form>
            <input id="reset" type="button" value="Begin opnieuw >" onclick="reset()">
    </div>    
        <div id="allgeprobeerd">
            
            <?php            
                include 'check.php';
            ?>
            <h2>Al geprobeerd:</h2>
                <?php
                    $allTries = "SELECT `col1`, `col2`, `col3`, `col4` FROM `try` WHERE 1;";
                    $results = $conn->query($allTries);
                while($row = $results->fetch_assoc()){
                    
                    
                    if ($row['col1'] == $masterArray[0]){
                        echo '<div class="circle goed '.$row['col1'].'"></div>';
                    } elseif ($row['col1'] !==$masterArray[0] && (in_array($row['col1'], $masterArray))){
                        echo '<div class="circle plek '.$row['col1'].'"></div>';
                    } else {
                        echo '<div class="circle fout '.$row['col1'].'"></div>';
                    }
                    
                    if ($row['col2'] == $masterArray[1]){
                        echo '<div class="circle goed '.$row['col2'].'"></div>';
                    } elseif ($row['col2'] !==$masterArray[1] && (in_array($row['col2'], $masterArray))){
                        echo '<div class="circle plek '.$row['col2'].'"></div>';
                    } else {
                        echo '<div class="circle fout '.$row['col2'].'"></div>';
                    }
                    
                    if ($row['col3'] == $masterArray[2]){
                        echo '<div class="circle goed '.$row['col3'].'"></div>';
                    } elseif ($row['col3'] !==$masterArray[2] && (in_array($row['col3'], $masterArray))){
                        echo '<div class="circle plek '.$row['col3'].'"></div>';
                    } else {
                        echo '<div class="circle fout '.$row['col3'].'"></div>';
                    }
                    
                    if ($row['col4'] == $masterArray[3]){
                        echo '<div class="circle goed '.$row['col4'].'"></div>';
                    } elseif ($row['col4'] !==$masterArray[3] && (in_array($row['col4'], $masterArray))){
                        echo '<div class="circle plek '.$row['col4'].'"></div>';
                    } else {
                        echo '<div class="circle fout '.$row['col4'].'"></div>';
                    }
                    
                    echo'<br>';
                    
                    //'<div class="circle  '.$row['col1'].'"></div>',
                            
                     //    '<div class="circle  '.$row['col2'].'"></div>',
                            
                       //  '<div class="circle  '.$row['col3'].'"></div>',
                            
                         //'<div class="circle  '.$row['col4'].'"></div><br>';
                }    
                
                ?>
        </div>
    </body>
</html>