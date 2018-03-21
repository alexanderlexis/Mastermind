<html>
    <head>
        <?php 
        //comment2
            $ser = "localhost";
            $dab = "mastermind";
            $usn = "root";
            $psw = "";
            $conn = mysqli_connect($ser, $usn, $psw, $dab);
        ?>
        <link rel="stylesheet" href="style.css">
        <script>
            function updateMaster(){
                var mcol1 =  document.getElementById("mcol1").value;
                var mcol2 =  document.getElementById("mcol2").value;
                var mcol3 =  document.getElementById("mcol3").value;
                var mcol4 =  document.getElementById("mcol4").value;
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                if (this.readyState === 4 && this.status === 200) {
                    // Typical action to be performed when the document is read:
                }
                };
                xhttp.open("GET", "updatemaster.php?mcol1="+mcol1+"&mcol2="+mcol2+"&mcol3="+mcol3+"&mcol4="+mcol4, true);
                xhttp.send();
            }
            
            function setMaster(){
                var mcol1 =  document.getElementById("mcol1").value;
                var mcol2 =  document.getElementById("mcol2").value;
                var mcol3 =  document.getElementById("mcol3").value;
                var mcol4 =  document.getElementById("mcol4").value;
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                if (this.readyState === 4 && this.status === 200) {
                    // Typical action to be performed when the document is ready:
                }
                };
                xhttp.open("GET", "setmaster.php?mcol1="+mcol1+"&mcol2="+mcol2+"&mcol3="+mcol3+"&mcol4="+mcol4, true);
                xhttp.send();
            }
            
            function check(){
                var col1 =  document.getElementById("col1").value;
                var col2 =  document.getElementById("col2").value;
                var col3 =  document.getElementById("col3").value;
                var col4 =  document.getElementById("col4").value;
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                if (this.readyState === 4 && this.status === 200) {
                    // Typical action to be performed when the document is ready:
                    document.getElementById("searchResult").innerHTML = xhttp.responseText;
                }
                };
                xhttp.open("GET", "check.php?col1="+col1+"&col2="+col2+"&col3="+col3+"&col4="+col4, true);
                xhttp.send();
            }
        </script>
    </head>
    <body>
        <header>
            <div id="master">
            <form action="index.php">
                <select id="mcol1" name="col1">
                    <option value="red">Red</option>
                    <option value="blue">Blue</option>
                    <option value="yellow">Yellow</option>
                    <option value="green">Green</option>
                    <option value="purple">Purple</option>
                    <option value="orange">Orange</option>
                </select>
                <select id="mcol2" name="col2">
                    <option value="red">Red</option>
                    <option value="blue">Blue</option>
                    <option value="yellow">Yellow</option>
                    <option value="green">Green</option>
                    <option value="purple">Purple</option>
                    <option value="orange">Orange</option>
                </select>
                <select id="mcol3" name="col3">
                    <option value="red">Red</option>
                    <option value="blue">Blue</option>
                    <option value="yellow">Yellow</option>
                    <option value="green">Green</option>
                    <option value="purple">Purple</option>
                    <option value="orange">Orange</option>
                </select>
                <select id="mcol4" name="col4">
                    <option value="red">Red</option>
                    <option value="blue">Blue</option>
                    <option value="yellow">Yellow</option>
                    <option value="green">Green</option>
                    <option value="purple">Purple</option>
                    <option value="orange">Orange</option>
                </select>
                <input type="submit" value="Set master" onclick="setMaster()">
                <input type="submit" value="Update master" onclick="updateMaster()">
            </form>
            </div>
        </header>
        
        
        <form action="index.php">
            <select id="col1" name="col1">
                <option value="red">Red</option>
                <option value="blue">Blue</option>
                <option value="yellow">Yellow</option>
                <option value="green">Green</option>
                <option value="purple">Purple</option>
                <option value="orange">Orange</option>
            </select>
            <select id="col2" name="col2">
                <option value="red">Red</option>
                <option value="blue">Blue</option>
                <option value="yellow">Yellow</option>
                <option value="green">Green</option>
                <option value="purple">Purple</option>
                <option value="orange">Orange</option>
            </select>
            <select id="col3" name="col3">
                <option value="red">Red</option>
                <option value="blue">Blue</option>
                <option value="yellow">Yellow</option>
                <option value="green">Green</option>
                <option value="purple">Purple</option>
                <option value="orange">Orange</option>
            </select>
            <select id="col4" name="col4">
                <option value="red">Red</option>
                <option value="blue">Blue</option>
                <option value="yellow">Yellow</option>
                <option value="green">Green</option>
                <option value="purple">Purple</option>
                <option value="orange">Orange</option>
            </select>
            <input type="submit" value="Check" onclick="check()">
        </form>
        
        <div id="allgeprobeerd">
            <ul>
                <?php
                    $allTries = "SELECT `col1`, `col2`, `col3`, `col4` FROM `try` WHERE 1;";
                    $results = $conn->query($allTries);

                while($row = $results->fetch_assoc()){
                    echo "<li>";
                    echo $row['col1'],' ' ,$row['col2'], ' ' ,$row['col3'], ' ' ,$row['col4'];
                }

                ?>
            </ul>
        <div class="circle goed"></div>
        <div class="circle fout"></div>
        <div class="circle plek"></div>
    </body>
</html>