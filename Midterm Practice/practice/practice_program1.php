<!DOCTYPE html>
<html>
    <head>
        <title>
            Find the Letter!
        </title>
        <link rel="stylesheet" href="css/styles.css" type="text/css" />
    </head>
    <body align = "center">
        <h2>
            Find the Letter!
        </h2>
        <h3>
            Select a Letter to Find:
        </h3>
        <?php
            session_start();
            if($_GET['clear_history'] == "Clear History")
            {
                $_SESSION['history'] = null;
            }
            echo "<form method='get'>";
            echo "<select name = 'letter_to_find'>";
            $history = $_SESSION['history'];
            for($i = 65; $i <= 90; $i++)
            {
                $character =  chr($i);
                echo "<option value= ". $character .">" . $character ."</option>"; 
            }
            echo "</select>";
    
            echo "<br>";
            echo "Select Table Size: <select name = 'table_size'>";
            for($i = 6; $i <= 10; $i++)
            {
                echo "<option value = " .$i . ">" .$i . "x" .$i . "</option>";
            }
            echo "</select>";
            echo "<br>";
            
            echo "Select Letter to Omit <select name = 'letter_to_ommit'>";
            for($i = 65; $i <= 90; $i++)
            {
                $character =  chr($i);
                echo "<option value= " . $character . ">" . $character ."</option>"; 
            }
            echo "</select>";
            echo "<input type='submit' value='Create Table' name = 'submit'>";
            echo "</form>";
            function displayTable($table_demensions)
            {
                if($_GET['table_size'] == "6")
                    printTable6x6();
                else if($_GET['table_size'] == "7")
                    printTable7x7();
                else if($_GET['table_size'] == "8")
                    printTable8x8();
                else if($_GET['table_size'] == "9")
                    printTable9x9();
                else if($_GET['table_size'] == "10")
                    printTable10x10();
            }
            function printTable7x7()
            {
 /*
                A-G: RED
                H-O: BLUE
                Q-Z: GREEN
                */
                echo "<h1> Find the Letter " . $_GET['letter_to_find'] . "</h1>";
    
                echo "<br>";
                $radRow = rand(0, 6);
                $randCol = rand(0, 6);
                $letter_to_ommit = $_GET['letter_to_ommit'];
                $letter_to_find = $_GET['letter_to_find'];
                echo "<br>";
                
                echo "Letter to Ommit: " . $letter_to_ommit;
                echo "<div align = 'center'>";
                echo "<table>";
                for($row = 0; $row < 7; $row++)
                {
                    echo "<tr>";
                    for($col = 0; $col < 7; $col++)
                    {
                        $color;
                        $letter_to_display = chr(rand(65, 90));
                        while($letter_to_display == $letter_to_find or $letter_to_display == $letter_to_ommit)
                          $letter_to_display = chr(rand(65, 90));
                          
                        if($radRow == $row and $col == $randCol)
                            $letter_to_display = $letter_to_find;
                            
                        if($letter_to_display >= 'A' and $letter_to_display <= 'G')
                            $color = "red";
                        else if($letter_to_display >= 'H' and $letter_to_display <= 'O')
                            $color = "blue";
                        else
                            $color = "green";
                        echo "<td>"; 
                        echo "<font color =" . $color . ">" . $letter_to_display . "</font>";
                        echo "</td>";
                    }
                    echo "</tr>";
                }
                echo "</table>";       
                echo "</div>";
            }
            function printTable8x8()
            {
  /*
                A-G: RED
                H-O: BLUE
                Q-Z: GREEN
                */
                echo "<h1> Find the Letter " . $_GET['letter_to_find'] . "</h1>";
    
                echo "<br>";
                $radRow = rand(0, 7);
                $randCol = rand(0, 7);
                $letter_to_ommit = $_GET['letter_to_ommit'];
                $letter_to_find = $_GET['letter_to_find'];
                echo "<br>";
                
                echo "Letter to Ommit: " . $letter_to_ommit;
                echo "<div align = 'center'>";
                echo "<table>";
                for($row = 0; $row < 8; $row++)
                {
                    echo "<tr>";
                    for($col = 0; $col < 8; $col++)
                    {
                        $color;
                        $letter_to_display = chr(rand(65, 90));
                        while($letter_to_display == $letter_to_find or $letter_to_display == $letter_to_ommit)
                          $letter_to_display = chr(rand(65, 90));
                          
                        if($radRow == $row and $col == $randCol)
                            $letter_to_display = $letter_to_find;
                            
                        if($letter_to_display >= 'A' and $letter_to_display <= 'G')
                            $color = "red";
                        else if($letter_to_display >= 'H' and $letter_to_display <= 'O')
                            $color = "blue";
                        else
                            $color = "green";
                        echo "<td>"; 
                        echo "<font color =" . $color . ">" . $letter_to_display . "</font>";
                        echo "</td>";
                    }
                    echo "</tr>";
                }
                echo "</table>";   
                echo "</div>";
            }
            function printTable9x9()
            {
  /*
                A-G: RED
                H-O: BLUE
                Q-Z: GREEN
                */
                echo "<h1> Find the Letter " . $_GET['letter_to_find'] . "</h1>";
    
                echo "<br>";
                $radRow = rand(0, 8);
                $randCol = rand(0, 8);
                $letter_to_ommit = $_GET['letter_to_ommit'];
                $letter_to_find = $_GET['letter_to_find'];
                echo "<br>";
                
                echo "Letter to Ommit: " . $letter_to_ommit;
                echo "<div align = 'center'>";
                echo "<table>";
                for($row = 0; $row < 9; $row++)
                {
                    echo "<tr>";
                    for($col = 0; $col < 9; $col++)
                    {
                        $color;
                        $letter_to_display = chr(rand(65, 90));
                        while($letter_to_display == $letter_to_find or $letter_to_display == $letter_to_ommit)
                          $letter_to_display = chr(rand(65, 90));
                          
                        if($radRow == $row and $col == $randCol)
                            $letter_to_display = $letter_to_find;
                            
                        if($letter_to_display >= 'A' and $letter_to_display <= 'G')
                            $color = "red";
                        else if($letter_to_display >= 'H' and $letter_to_display <= 'O')
                            $color = "blue";
                        else
                            $color = "green";
                        echo "<td>"; 
                        echo "<font color =" . $color . ">" . $letter_to_display . "</font>";
                        echo "</td>";
                    }
                    echo "</tr>";
                }
                echo "</table>";  
                echo "</div>";
            }
            function printTable10x10()
            {
    /*
                A-G: RED
                H-O: BLUE
                Q-Z: GREEN
                */
                echo "<h1> Find the Letter " . $_GET['letter_to_find'] . "</h1>";
    
                echo "<br>";
                $radRow = rand(0, 9);
                $randCol = rand(0, 9);
                $letter_to_ommit = $_GET['letter_to_ommit'];
                $letter_to_find = $_GET['letter_to_find'];
                echo "<br>";
                
                echo "Letter to Ommit: " . $letter_to_ommit;
                echo "<div align = 'center'>";
                echo "<table>";
                for($row = 0; $row < 10; $row++)
                {
                    echo "<tr>";
                    for($col = 0; $col < 10; $col++)
                    {
                        $color;
                        $letter_to_display = chr(rand(65, 90));
                        while($letter_to_display == $letter_to_find or $letter_to_display == $letter_to_ommit)
                          $letter_to_display = chr(rand(65, 90));
                          
                        if($radRow == $row and $col == $randCol)
                            $letter_to_display = $letter_to_find;
                            
                        if($letter_to_display >= 'A' and $letter_to_display <= 'G')
                            $color = "red";
                        else if($letter_to_display >= 'H' and $letter_to_display <= 'O')
                            $color = "blue";
                        else
                            $color = "green";
                        echo "<td>"; 
                        echo "<font color =" . $color . ">" . $letter_to_display . "</font>";
                        echo "</td>";
                    }
                    echo "</tr>";
                }
                echo "</table>";   
                echo "</div>";
            }
            function printTable6x6()
            {
                /*
                A-G: RED
                H-O: BLUE
                Q-Z: GREEN
                */
                echo "<h1> Find the Letter " . $_GET['letter_to_find'] . "</h1>";
    
                echo "<br>";
                $radRow = rand(0, 5);
                $randCol = rand(0, 5);
                $letter_to_ommit = $_GET['letter_to_ommit'];
                $letter_to_find = $_GET['letter_to_find'];
                echo "<br>";
                
                echo "Letter to Ommit: " . $letter_to_ommit;
                echo "<div align = 'center'>";
                echo "<table>";
                for($row = 0; $row < 6; $row++)
                {
                    echo "<tr>";
                    for($col = 0; $col < 6; $col++)
                    {
                        $color;
                        $letter_to_display = chr(rand(65, 90));
                        while($letter_to_display == $letter_to_find or $letter_to_display == $letter_to_ommit)
                          $letter_to_display = chr(rand(65, 90));
                          
                        if($radRow == $row and $col == $randCol)
                            $letter_to_display = $letter_to_find;
                            
                        if($letter_to_display >= 'A' and $letter_to_display <= 'G')
                            $color = "red";
                        else if($letter_to_display >= 'H' and $letter_to_display <= 'O')
                            $color = "blue";
                        else
                            $color = "green";
                        echo "<td>"; 
                        echo "<font color =" . $color . ">" . $letter_to_display . "</font>";
                        echo "</td>";
                    }
                    echo "</tr>";
                }
                echo "</table>";
                echo "</div>";
            }
            function displayHistory()
            {
                global $history;
                if($_GET['letter_to_find'] != $_GET['letter_to_ommit'])
                    $history[] = $_GET['letter_to_find'];
                $_SESSION['history'] = $history;
                echo "<hr>";
                echo "Letters to Find History: ";
                //var_dump($_SESSION['history']);
                
                for($i = 0; $i < sizeof($history); $i++)
                {
                    echo $history[$i] . ",";
                }
                echo "<form>";
                echo "<input type='submit' value='Clear History' name = 'clear_history'>";
                echo "</form>";
            }
            if($_GET['letter_to_find'] != $_GET['letter_to_ommit'])
            {
                displayTable($_GET['table_size']);
            }
            else if($_GET['clear_history'] != "Clear History" and $_GET['submit'] != "")
                echo "<h3> Error: Letter to Find Must be different from Letter to Omit!</h3>";
                displayHistory();

        
        ?>
        <?php
        
        ?>
    </body>
</html>