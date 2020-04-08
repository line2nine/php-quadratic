<?php

include "Quadratic.php";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $a = $_REQUEST['a'];
    $b = $_REQUEST['b'];
    $c = $_REQUEST['c'];

    $quadratic = new Quadratic($a, $b, $c);
    $root1 = 0;
    $root2 = 0;

    if ($a != 0) {
        if ($quadratic->getDelta() > 0) {
            $root1 = $quadratic->getRoot1();
            $root2 = $quadratic->getRoot2();
            echo '<h1>Phương trình có 2 nghiệm là ' . '<span style="color: red">' . $root1 . '</span>' . ' và ' . '<span style="color: red">' . $root2 . '</span>' . '</h1>';
        } else if ($quadratic->getDelta() === 0) {
            $root1 = $quadratic->getExp();
            echo '<h1>Phương trình có 1 nghiệm là ' . $root1 . '</h1>';
        } else
            echo '<h1>Phương trình vô nghiệm</h1>';
    } else {
        echo "<h1>Not Found</h1>";
    }
}
