# PHP Silent Array Key Access

This repository demonstrates a common yet subtle bug in PHP: the silent handling of non-existent array keys. When accessing an array element with a key that does not exist, PHP returns NULL without raising an error.  This can cause unexpected behavior and make debugging more challenging.

The `bug.php` file shows the problematic code, while `bugSolution.php` demonstrates a safer, more robust approach.

## Bug
PHP's default behavior of silently returning NULL for non-existent array keys can lead to unexpected results and logic errors, especially in larger applications.

## Solution
Always check for the existence of a key using `array_key_exists()` before accessing an array element.  This prevents errors and improves the reliability of your PHP code.