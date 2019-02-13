<?php
// apache
$apache = @fsockopen("localhost", 80, $errno, $errstr, "1");
if (!$apache) {
    $apache_status= "<span style='color:#F44336'>Offline</span>";
} else {
    $apache_status= "<span style='color:#02c54c'>Online</span>";
    fclose($apache);
}
fclose($apache);
 // ftp
 $ftp = @fsockopen("localhost", 21, $errno, $errstr, "1");
 if (!$ftp) {
     $ftp_status= "<span style='color:#F44336'>Offline</span>";
 } else {
     $ftp_status= "<span style='color:#02c54c'>Online</span>";
     fclose($ftp);
 }
fclose($ftp);
// mysql
$sql = @fsockopen("localhost", 3306, $errno, $errstr, "1");
if (!$sql) {
    $sql_status= "<span style='color:#F44336'>Offline</span>";
} else {
    $sql_status= "<span style='color:#02c54c'>Online</span>";
    fclose($sql);
}
fclose($sql);
// SMTP
$smtp = @fsockopen("localhost", 465, $errno, $errstr, "1");
if (!$smtp) {
    $smtp_status= "<span style='color:#F44336'>Offline</span>";
} else {
    $smtp_status= "<span style='color:#02c54c'>Online</span>";
    fclose($smtp);
}
// IMAP
$imap = @fsockopen("localhost", 993, $errno, $errstr, "1");
if (!$imap) {
    $imap_status= "<span style='color:#F44336'>Offline</span>";
} else {
    $imap_status= "<span style='color:#02c54c'>Online</span>";
    fclose($imap);
}
fclose($imap);
// POP
$pop = @fsockopen("localhost", 995, $errno, $errstr, "1");
if (!$pop) {
    $pop_status= "<span style='color:#F44336'>Offline</span>";
} else {
    $pop_status= "<span style='color:#02c54c'>Online</span>";
    fclose($pop);
}
fclose($pop);
// end
/*echo $apache_status;
echo $ftp_status;
echo $sql_status;
echo $smtp_status;
echo $imap_status;
echo $pop_status;*/
?>
<!DOCTYPE html>
<html lang="en">
  <head>
		<!-- head -->
		<title>OWL Internet | Server Status</title>
		<!-- include Depedencies -->
    <?php include 'includes/functions.php'; ?>
    <?php include 'includes/common-header.php'; ?>
		<!-- /.include Depedencies and nav-->


		<!-- CONTENTS -->
    <!-- # content -->
    <!-- include scripts -->
    <?php include 'includes/common-footer.php'; ?>
    <!-- # indlude scripts -->
