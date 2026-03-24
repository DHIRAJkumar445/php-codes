<?php
function reverseString($str) {
    $reversed = "";
    $length = 0;

    // Find length manually
    while (isset($str[$length])) {
        $length++;
    }

    // Reverse the string
    for ($i = $length - 1; $i >= 0; $i--) {
        $reversed .= $str[$i];
    }

    return $reversed;
}

// Example usage
$input = "Hello World";
echo reverseString($input);
?>