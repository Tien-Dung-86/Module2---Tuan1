<?php
function demo(){
    static $x = 5;
    echo $x."<br>";
    $x++;
}

demo();
demo();

