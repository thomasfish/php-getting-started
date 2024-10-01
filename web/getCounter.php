<?php
header("Access-Control-Allow-Origin: *");
header('Cache-Control: no-cache');

/*while (!@mkdir("textfiles/counter.txt.lock")) {
  sleep(1);
}*/
$counterfile = file("textfiles/counter.txt");
//rmdir("textfiles/counter.txt.lock");

$countervalue = $counterfile[0];
echo $countervalue;
?>
