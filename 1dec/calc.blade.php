<?php
$file = "numbers.txt";
$contents = file_get_contents($file);
$lines = explode(PHP_EOL, $contents);

$data = [];
$key = 0;

foreach($lines as $line) {
    if ($line == NULL) {
        $key++;
    } elseif (! isset($data[$key])) {
        $data[$key] = intval($line);
    } else {
        $data[$key] += intval($line);
    }
}
rsort($data);
$dataFirstThree = $data[0] + $data[1] + $data[2];

dump($dataFirstThree);

function dump($var) {
    echo "<pre style='background-color: orange; width: fit-content; display: inline-block; margin-right: 1rem; font-weight: bold; font-size: 2rem; color: #000; padding: 3px; border: 2px dashed red;'>";var_dump($var);echo "</pre>";
}
?>

<?php