<?php 

foreach (range(1, 100) as $int ) {
    if ($int % 3 == 0 && $int %5 == 0) {
        echo "FizzBuzz" . " ";
    } elseif ($int % 3 == 0) {
        echo "Fizz" . " ";
    } elseif ($int % 5 == 0) {
        echo "Buzz" . " ";
    } else {
        echo $int . " ";
    }
}