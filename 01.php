<?php

echo("Part 1:\n");
part1();
echo("\n\nPart 2:\n");
part2();

function part1(){
    $result = 0;
    $handle = fopen("./01.txt", "r");
    while(($line = fgets($handle)) != null){
        $line = preg_replace("/[^0-9]/", "", $line);
        $result += intval($line[0] . $line[strlen($line)-1]);
    }
    echo($result);
}

function part2(){
    $result = 0;
    $nums = array("/one/", "/two/", "/three/", "/four/", "/five/", "/six/", "/seven/", "/eight/", "/nine/");
    $ints = array("o1e","t2o","t3e","f4r","f5e","s6x","s7n","e8t","n9e");
    $handle = fopen("./01.txt", "r");
    while(($line = fgets($handle)) != null){
        $line = preg_replace($nums, $ints, $line);
        $line = preg_replace("/[^0-9]/", "", $line);
        $result += intval($line[0] . $line[strlen($line)-1]);
    }
    echo($result);
}

?>
