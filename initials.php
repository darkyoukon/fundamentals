<?php
//(int), (integer) — приведение к integer.
//(bool), (boolean) — приведение к boolean.
//(float), (double), (real) — приведение к float.
//(string) — приведение к string.
//(array) — приведение к array.
//(object) — приведение к object.
//(unset) — приведение к NULL.
echo (string)1.4e6.'<br>'; //
//phpnet - documentation
// isset — Определяет, была ли установлена переменная значением, отличным от NULL
// <> === !=
// && || - and or
// round ceil min max abs floor rand
//const I = 10;
//echo I;
// Analogue to dictionary in Python
$array = [
    'q' => 3,
    2,
    'v' => 1,
    'str' => 'testing',
    'str2' => "quit",
    'nested_array' => [400, 244, 122]
];
asort($array);
$dereference = 'array';
echo 'Output dereferenced key-value array with Python style:<br>';
foreach ($$dereference as $key => $item) :
    switch (gettype($item)):
        case 'array':
            foreach ($$dereference[$key] as $n_key => $n_item):
               echo "array[$key]['$n_key'] = $n_item<br>";
            endforeach;
            break;
        default:
            echo "array['$key'] = $item<br>";
    endswitch;
endforeach;
echo "<br>";
$fls = [FALSE, 0, 0.0, '', "", '0', "0", array(), NULL]; // also obj with no vars
foreach ($fls as $num => $value) {
    if(!$value) {
        print "fls[$num] (" . gettype($value) . ") = $value<br>"; // same as echo but behaves like func
    }
    // Ternary operator
    ($value === false) ?
        print '<span style="color:red;">it\'s false (tc)<br></span>' :
        print '<span style="color:deepskyblue;">it\'s not false (tc)<br></span>';
}

// Unpacking, similar to zip() in Python
$array = [
    [1, 2],
    [3, 4],
];
echo '<br>';
foreach ($array as list($a, $b, $c)) {
    echo "A: $a; B: $b; C: $c<br>";
}

$Bar = "a";
$Foo = "Bar";
$World = "Foo";
$Hello = "World";
$a = "Hello";
$b = &$a;
for($i = 1; $i < 10; $i++) {
    echo "$a ";
    $a = $$a;
}
echo $b;

// Another casting example
echo '<br><br>'. 2**'$'.'<br>';
// Regex
$str = "asdasdaw00010.2s1sm";
echo "Original string: $str<br>";
echo 'Regular expression changer: ';
echo preg_replace('~(?<!\d)0+(?=\d+\.\d+)~', ' ', $str);

// Explode|Implode samples
$str = "Моя заковыристая строка :)";
echo "<br><br>Original string: $str";
echo "<br>Exploded string:<br>";
$expl = explode(" ", $str);
foreach($expl as $value) {
    if (reset($expl) === $value) {
        echo $value.'<br>';
    } elseif (end($expl) === $value) { //sizeof($expl)-1 in usual for
        echo $value;
    } else {
        echo $value.'<br>';
    }
}
echo "<br><br>Imploded exploded string: ".implode("|", $expl);

?>

<a href="oop.php"><br><br>OOP samples</a>