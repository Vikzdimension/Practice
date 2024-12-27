<?php
echo "welcome to PHP";

$haystack = "sadbutsad";
$needle = "sdfs";

$postion = strpos($haystack, $needle);
if ($postion === false) {
    return -1;
}
return $postion;
var_dump($postion);

?>