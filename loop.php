<?php

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