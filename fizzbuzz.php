<?php
$a = '</br>';
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz" . $a;
    } else {
        if ($i % 3 == 0) {
            echo "fizz" . $a;
        } else {
            if ($i % 5 == 0) {
                echo "buzz" . $a;
            } else {
                echo $i . $a;
            }
        }
    }
}
