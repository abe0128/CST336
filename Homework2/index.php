<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>
            Star Trek Battleship (kinda :p)
        </title>
        <link href="style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>

    <?php
        
            // Step 1: Generate your Data
            // * use an array to represent ONE row of your grid 
            // * use a two dimensional array to represent the whole grid
            // * Randomly populate the elemeents of this 2D-array with letters 
            //      * populate your array elements one at a time 
            //      
            //
            //
            
            
            // Step 2: Given the data, generate a view ==> html (td elements)
            // Given Input: a 2D-array 
            // function that iterates through the 2D-array (double for loop?), 
            //         loop through the rows (generate 10 tr's) {
            //               echo "<tr>"; 
            //               loop through the columns (generate 10 td's inside each tr) {
            //                    echo "<td>"........"</td>"; 
            //               }
            //               echo "</tr>"; 
            // 
            //         }
            //         
            //          output: <tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
            
      ?>  

        <div id="wrapper"> 
            <div id="header">
                <figure>
                    <img src="./federationpics/star-trek-logo.jpg" width="1400" height="300" />
                </figure>
            </div>
            <div id="body">
                <h1 class="center">STARTREK SHIP BATTLESHIP</h1>
                <p class="center">
                    "This Generator thing randomly places federation ships 
                    on the battlefield."
                </p>
                
                <div id="field">
                    <table border="1">
                        <tbody>
                        <?php
                            $table = array("", "", "", "","", "", "", "", "", "");
                            
                            $randomIndices = array(0,1,2,3,4,5,6,7,8,9,10,
                                                   11,12,13,14,15,16,17,18,19,20,
                                                   21,22,23,24,25,26,27,28,29,30,
                                                   31,32,33,34,35,36,37,38,39,40,
                                                   41,42,43,44,45,46,47,48,49,50,
                                                   51,52,53,54,55,56,57,58,59,60,
                                                   61,62,63,64,65,66,67,68,69,70,
                                                   71,72,73,74,75,76,77,78,79,80,
                                                   81,82,83,84,85,86,87,88,89,90,
                                                   91,92,93,94,95,96,97,98,99); //should go from 0 to 99
                            // map the number to an x,y coordinate (which row, which col)
                            
                            shuffle($randomIndices); // randomize it 
                            //array_rand();  look this up....  
                            
                            $numFedBattleships = 5;
                            $numFedCruisers = 3;
                            $numFedStrikeCruiser = 2;
                            $totalPieces = $numBattleships + $numCruisers + $numStrikeCruiser; 
                            $countnum1 = 0;
                            $countnum2 = 0;
                            $countnum3 = 0;
                            
                            
                            for ($i = 0; $i < $numFedBattleships; $i++)
                            {
                                $indexOfNextBattleship = array_pop($randomIndices);
                                
                                // place a battleship (letter "B") at this index
                                // Goal: $table = array("", "", "B", "","", "", "", "","", "");
                                
                                $table[$indexOfNextBattleship] = "FB";
                                $countnum1++;
                            }
                            
                            // another for loop for your cruisers
                            for ($i = 0; $i< $numFedCruisers; $i++) 
                            {
                                $indexOfNextCruiser = array_pop($randomIndices);
                                
                                // place a battleship (letter "C") at this index
                                // Goal: $table = array("", "", "C", "","", "", "", "","", "");
                                
                                $table[$indexOfNextCruiser] = "FC";
                                $countnum2++;
                            }
            
                            // another for loop for your carriers 
                            for ($i = 0; $i< $numFedStrikeCruiser; $i++) 
                            {
                                $indexOfNextStrikeCruiser = array_pop($randomIndices);
                                
                                // place a battleship (letter "S") at this index
                                // Goal: $table = array("", "", "S", "","", "", "", "","", "");
                                
                                $table[$indexOfNextStrikeCruiser] = "FSC";
                                $countnum3++;
                                
                            }
                            
                            // pick a random index and store your letter there.
                            for($x = 0; $x < 10; $x++)
                            {
                                echo "<tr>";
                                for($y = 0; $y < 10; $y++)
                                {
                                    echo "<td>";
                                    echo  $table[array_rand($table)]; 
                                    echo "</td>"; 
                                }
                                echo "</tr>";
                            }
                        ?>
                        </tbody>
                    </table>
                    <form class="center">
                        <input style="height: 50px; width: 150px;" type="button" value="Generate" onclick="window.location.reload()">
                    </form>
                </div>
                <div id="description">
                    <div id="image">
                        <img src="federationpics/UFoP-Flag.png" width: "500" height: "500">
                    </div>
                </div>
            </div>
        </div>
    </body>
    <footer>
        
    </footer>
</html>