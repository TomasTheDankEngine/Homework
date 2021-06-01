<h2>*** 4-3:</h2>
<?php
$letters = [];
for ($i = 0; $i < 200; $i++) {
    $letters[$i] = chr(rand(65, 68));
}
$letters_str = implode(' ', $letters);
echo "A's: " . substr_count($letters_str, 'A') . '<br>' . "B's: " . substr_count($letters_str, 'B') . '<br>' . "C's: " . substr_count($letters_str, 'C') . '<br>' . "D's: " . substr_count($letters_str, 'D');