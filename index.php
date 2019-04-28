<?php
# Coded By SadCode
error_reporting(0);
date_default_timezone_set('Asia/Jakarta');
$f = fopen("log/".date("l-d-m-y").".txt", "a");
$log = "IP : ".$_SERVER['REMOTE_ADDR']."\n
User-Agent : ".$_SERVER['HTTP_USER_AGENT']."\n
Request : http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']."\n
Date & Time  : ".date("r")."\n
================================================\n\n";
fwrite($f, $log);
fclose($f);
?>
