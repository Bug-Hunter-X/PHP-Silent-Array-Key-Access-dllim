The solution involves explicitly checking if the key exists before attempting to access it.

```php
<?php
$myArray = ['a' => 1, 'b' => 2];

// Check if the key 'c' exists before accessing
if (array_key_exists('c', $myArray)) {
  echo $myArray['c'];
} else {
  echo 'Key "c" does not exist in the array.';
}

//Alternatively, use the null coalescing operator (PHP 7.0 and later)
echo $myArray['c'] ?? 'Key "c" does not exist in the array.';
?>
```
Using `array_key_exists()` or the null coalescing operator ensures that your code handles missing keys gracefully, preventing unexpected behavior and making your application more robust.