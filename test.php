<?php

// $test = 'hello world';

// $a = function (int $number) use ($test) {
//     echo $test . ' ' . $number . PHP_EOL;
// };

// $a(1);
// $a(2);
// $a(3);

// $test = 'asdasd';

// $a(4);

$test = 'hello world';

$a = function () use ($test) {
    echo $test . PHP_EOL;
};

$a();

$test = 'asdasd';

$a();
$test = 'asdwwwwd';
$a();