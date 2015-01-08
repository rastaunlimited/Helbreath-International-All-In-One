<? $pagetitle = "Top 100 EK (Rax raiders)" ?>
<? include("header.php") ?>


<? $posttitle = "Top 100 EK (Rax raiders)" ?>
<? include("post_head.php") ?>
<? include("table_head.php") ?>

<table cellspacing = "0px">
  <tr>
    <th>Rank</th>
    <th>Player name</th>
    <th>Nation</th>
    <th>Level</th>
    <th>Enemy kills</th>
    <th>Honor</th>
  </tr>
	<?php mysql_connect($mysql_ip, $mysql_user, $mysql_pw); mysql_select_db($mysql_db);
		$sql = mysql_query("SELECT char_name, Nation, Level, EK, elo FROM char_database
			WHERE AdminLevel=0 && Level <= 50 && Nation = 'NONE' ORDER BY EK DESC, Level DESC LIMIT 100");

	$i = 1; 
	while($row = mysql_fetch_array($sql)) {  
		printf("<tr class=\"row%d\">", ($i % 2));
		printf("<td>%d</td>", $i);
		printf("<td>%s</td>", $row['char_name']);
		echo("<td class=\"rax\">Rax Raider</td>"); 
		printf("<td>%d</td>", $row['Level']);
		printf("<td>%d</td>", $row['EK']);
		printf("<td>%d</td></tr>", $row['elo']);
		$i++; 
	} ?>
</table>

<?php include("table_foot.php") ?>
<?php include("post_foot.php"); ?>
<?php include("footer.php"); ?>

