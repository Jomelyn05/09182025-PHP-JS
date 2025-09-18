<?php

     //Conditional!

        $head = "Conditional";
            echo $head ."<br> <hr>";

        //if-else
    $age = 10;

        if ($age <= 12) { 
            
            echo "TOO YOUNG TO WATCH HARRY POTTER" . '<br>';

            } else if ($age > 15) { 
                
                echo "YOU MAY WATCH HARRY POTTER" . '<br>';

            } else { 
                
                echo "YOU SHOULD WATCH HARRY POTTER" . '<br>';

            }

    $age = 20;

        if ($age <= 12) { 
            
            echo "<br> TOO YOUNG TO WATCH HARRY POTTER" . '<br> <hr>';

            } else if ($age > 15) { 
                
                echo "<br> YOU MAY WATCH HARRY POTTER" . '<br> <hr>';

            } else { 
                
                echo "YOU SHOULD WATCH HARRY POTTER <br> <hr>";

            }

            //logical Operators
            // && - and , || - or, ! - not
            $namess = 'Logical Operators - Conditional';
                echo $namess . '<br>';

            $age = 20;
            $watched = "true";

        if ($age <= 15 && !$watched) { 
            
            echo "<br> YOU MUST WATCH HARRY POTTER";

            }

        if ($age >= 15 || !$watched) {
            echo "<br> YOU MUST NOT WATCH HARRY POTTER <hr>";
        }

        //SWITCH!!
        $names = 'Switch - Conditional';
            echo $names .'<br>';

        $day = 5;

        switch ($day) {
            case 1:
                
                echo "<br> MONDAY" . '<hr>';
                break;

            case 2:

                echo "<br> TUESDAY" . '<hr>';
                break;

            case 3: 
                
                echo "<br> WEDNESDAY" . '<hr>';
                break;
            
            case 4:

                echo "<br> THURSDAY" . '<hr>';
                break;
            
            case 5: 
                echo "<br> FRIDAY" . '<hr>';
                break;
        }
        
?>