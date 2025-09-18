<?php

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
            
?>