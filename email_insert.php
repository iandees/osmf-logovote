<?php
include_once('db.php');

if(($f = fopen("osmf-members.csv", 'r')) !== FALSE) {
  while(($data = fgetcsv($f)) !== FALSE) {
    $email = $data[2];
    $r = mysql_query("INSERT INTO `osmf_emails` (email) VALUES ('$email')");
    print mysql_error() . "\n";
  }
  fclose($f);
}
?>
