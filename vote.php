<?
include_once('db.php');

$email = mysql_escape_string($_GET['email']);
$voteA = mysql_escape_string($_GET['choiceA']);
$voteB = mysql_escape_string($_GET['choiceB']);
$voteC = mysql_escape_string($_GET['choiceC']);

if(!is_numeric($voteA) || !is_numeric($voteB) || !is_numeric($voteC)) {
  print "There was an error with your vote.";
  exit;
}

if(sizeof(array_unique(array($voteA, $voteB, $voteC))) != 3) {
  print "You may only vote once per logo. Please go back and correct it.";
  exit;
}

$r = mysql_query("SELECT * FROM `osmf_emails` WHERE email='$email'");

if(mysql_num_rows($r) != 1) {
  print "I don't know about that e-mail address. Please go back and fix it or contact OSMF.";
  exit;
}

$r = mysql_query("SELECT * FROM `osmf_votes` WHERE email='$email'");
if(mysql_num_rows($r) != 0) {
  print "You've already voted. If this is a mistake, please contact OSMF.";
  exit;
}

$r = mysql_query("INSERT INTO `osmf_votes` (email,voteA,voteB,voteC) VALUES ('$email','$voteA','$voteB','$voteC')");
$error = mysql_error();
if($error) {
  print "There was a problem recording your vote. Please contact OSMF.";
  exit;
}

print "Recorded the following votes for &quot;$email&quot;: <strong>1st:</strong>$voteA <strong>2nd:</strong>$voteB <strong>3rd:</strong>$voteC at " . gmdate("Y-m-d\TH:i:s\Z");

?>
