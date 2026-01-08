<?php
// Basic PHP examples while learning

$numbers = [1, 2, 3, 4];

foreach ($numbers as $num) {
    echo $num . "\n";
}

function greet($name) {
    return "Hello, " . $name;
}

echo greet("World");
