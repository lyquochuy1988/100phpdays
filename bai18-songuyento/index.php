<?php
function isPrime($number) {
    if ($number <= 1) {
        return false;
    }

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }

    return true;
}

if (isPrime(13)) {
    echo "So nguyen to";
} else {
    echo "Khong la so nguyen to";
}
?>