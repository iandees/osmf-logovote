<html>
<head>
<title>OSM-Foundation Logo Vote</title>
<style type="text/css">
div.logo-container {
  border: 1px solid black;
  width:250px;
  height:250px;
  margin:5px;
  float:left;
}

ul.choices {
  padding:0;
  margin:0;
  list-style-type:none;
  white-space:nowrap;
}

ul.choices {
  text-align:center;
}

ul.choices li {
  display:inline;
}

div.logo-image {
  text-align:center;
}
</style>
</head>
<body>

<p>To submit your vote: 1. Select your top three entries. 2. Enter your e-mail address below. 3. Click the Vote button. (Click a logo image to see the original)</p>

<form action="vote.php" method="get">
<div>
<?
$lines = file("logos.txt");
shuffle($lines);

foreach($lines as $n => $line) {
  $num = substr($line, 6, 2);
  print "<div class='logo-container'>";
  print "<div><ul class='choices'>";
  print "<li><input type='radio' name='choiceA' id='choice-a-$num' value='$num' /><label for='choice-a-$num'>1st</a></li>";
  print "<li><input type='radio' name='choiceB' id='choice-b-$num' value='$num' /><label for='choice-b-$num'>2nd</a></li>";
  print "<li><input type='radio' name='choiceC' id='choice-c-$num' value='$num' /><label for='choice-c-$num'>3rd</a></li>";
  print "</ul></div>";
  print "<div class='logo-image'><a href='$line'><img width='200' src='$line' /></a></div>";
  print "</div>";
}
?>
</div>
<div style="clear:both;"/>
  <p>Please use the e-mail address you used to register with OpenStreetMap Foundation.</p>
  <label for="email">E-Mail Address:</label>
  <input type="text" size="70" name="email" id="email" />
  <input type="submit" value="Vote" />
</form>
</body>
</html>
