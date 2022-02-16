<!DOCTYPE html>
<html>
    <form action="index.php" method="get">
        <p>n: <input type="number" id="n" name="n" step="1"></p>
        <p>Enter two words</p>
        <input type="text" id="word1" name="word1">
        <input type="text" id="word2" name="word2">
        <input type="submit" value="Submit">
    </form>



</html>

<?php

    if (!empty($_GET['word1']) && !empty($_GET['word2'])){ // only works if both words have values
        echo '<br>'.$_GET['word1'].$_GET['word2'].'<br><br>';// new line + word1 + word2 + 2 new lines
    } else {
        echo '<br>BlueBerry<br><br>'; // appropriate default
    }


    if (!empty($_GET['n'])) {// preforms get request to see if n has a value 
        $n = $_GET['n']; // saves n
    } else {
        $n = 100;
    }
        for ($i = 1; $i <= $n; $i++){
            echo $i;
            if ($i % 15 == 0){ // checks 15 first for Blueberry
                echo ' Bluberry<br>';
            }else if ($i % 3 == 0){
                echo ' Blue<br>';
            } else if ($i % 5 == 0){
                echo ' Berry<br>';
            } else {
                echo '<br>';
            }
        }
    
?>