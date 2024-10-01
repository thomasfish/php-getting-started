<?php
header("Access-Control-Allow-Origin: *");
header('Cache-Control: no-cache');

$winner = $_POST['winner'];
$loser = $_POST['loser'];

// LOCK
while (!@mkdir("textfiles/counter.txt.lock")) {
  sleep(1);
}
$counterfile = file("textfiles/counter.txt");
rmdir("textfiles/counter.txt.lock");

$countervalue = $counterfile[0] + 1;


//LOCK
while (!@mkdir("textfiles/counter.txt.lock")) {
  sleep(1);
}
file_put_contents("textfiles/counter.txt", $countervalue);
rmdir("textfiles/counter.txt.lock");
echo "hello";

/*

//LOCK
while (!@mkdir("textfiles/votes.txt.lock")) {
  sleep(1);
}
$votesfile = file("textfiles/votes.txt");
rmdir("textfiles/votes.txt.lock");

$winnerdata = $votesfile[$winner];
$winnerdataarray = explode(",", $winnerdata);
$winnerwins = intval($winnerdataarray[0]) + 1;
$winnerlosses = intval($winnerdataarray[1]);
$winnerdata = $winnerwins.",".$winnerlosses."\n";
$votesfile[$winner] = $winnerdata;
$loserdata = $votesfile[$loser];
$loserdataarray = explode(",", $loserdata);
$loserwins = intval($loserdataarray[0]);
$loserlosses = intval($loserdataarray[1]) + 1;
$loserdata = $loserwins.",".$loserlosses."\n";

//LOCK
while (!@mkdir("textfiles/votes.txt.lock")) {
  sleep(1);
}
$votesfile = file("textfiles/votes.txt");
$votesfile[$winner] = $winnerdata;
$votesfile[$loser] = $loserdata;
file_put_contents("textfiles/votes.txt", $votesfile);
rmdir("textfiles/votes.txt.lock");


$userip = $_SERVER['REMOTE_ADDR'];
//LOCK
while (!@mkdir("textfiles/iplist.txt.lock")) {
  sleep(1);
}
file_put_contents("textfiles/iplist.txt", $userip."\n", FILE_APPEND);
rmdir("textfiles/iplist.txt.lock");
*/
?>
