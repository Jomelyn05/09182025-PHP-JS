<?php 
        $name = 'Zura';
        $surname = 'Liza';
        $age = '32';
        $email = 'Zura@gmail.com';;
        $title = 'PHP';

        // Print variables with echo.
            echo "<hr> $title";
            echo "<br> <hr> $name  " . $surname ;
            echo "<br> $age <br>  $email" ."<br>";
            echo "<hr>";

        //string part!
        //strtolower - make all the sentence
        $title = 'Php String';
            echo $title . '<br> <hr>';
    
        $str = "String Php";

            echo strtolower($str) .'<br>';

            echo strtoupper($str) .'<br>';

            echo str_replace("Php","Secret!", $str) .'<br>';

            echo str_word_count($str) .'<br>';

            echo "<hr>";

        //number!

        $first = "Number";
            echo "$first <br> <hr>";

        $x = "5";
        $y = "5";

            echo $x - $y;
            echo "<br>";
            echo $x + $y;
            echo "<br>";
            echo $x * $y;
            echo "<br>";
            echo $x / $y;
            echo "<br> <hr>";

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

        //ARRAYS!!

        $aray = 'Arrays - PHP';
            echo $aray .'<br> <hr>';

        // INDEXED ARRAY
         $array = 'Indexed - Arrays';
            echo $array .'<br> <hr>';

        $fruits = ["Apple", "Avocado", "Star Fruits"];
            echo $fruits[2] .'<br>';
        $fruits[3] = 'Mango';
            echo '<pre>';
            var_dump($fruits);
            echo '</pre>';
            echo '<hr>';

        // MIXED ARRAY

        $second = 'Mixed - Arrays';
                echo $second .'<br> <hr>';

        $mixedArray = ["5", "Apple", true ];
            echo '<pre>';
            var_dump($mixedArray);
            echo '</pre> <hr>';

        //ASSOCIATIVE ARRAY

        $associative = 'Associative - Arrays';
            echo $associative .'<br> <hr>';

        $user = [
            'name' => 'Zura',
            'age' => '32',
            'hobbies' => ['Tennis, Coding'],
        ];

            echo $user['name'] .'<br>';
            echo '<pre>';
            var_dump($user);
            echo '</pre>';
            echo '<hr>';

        //LOOP

        $loop_array = 'Loop - Arrays';
        echo $loop_array .'<br> <hr>';

        //FOR LOOP!
        //($i = 0 - definition of loop; $i < 5 - condition; $i++ -  increment)
        for ($i = 0; $i < 5; $i++) {
            echo $i . " ";
            echo '<br>';
        }

        //while loop

        $i = 1;
        while ($i <= 5) {
            echo $i . " ";
            $i++;
            echo "<br>";
        }

        // foreach loop

        $fruit = ["Apple", "Avocado", "Cherry"];
foreach ($fruit as $fruit) {
    echo $fruit ."<br>";

}

?>