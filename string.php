<?php
$title = 'Php String';
            echo $title . '<br> <hr>';
    
        $str = "String Php";

            echo strtolower($str) .'<br>';

            echo strtoupper($str) .'<br>';

            echo str_replace("Php","Secret!", $str) .'<br>';

            echo str_word_count($str) .'<br>';

            echo "<hr>";
?>