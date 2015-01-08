<? $pagetitle = "Top 100 EK" ?>
<? include("header.php") ?>


<? $posttitle = "Top 100 EK" ?>
<? include("post_head.php") ?>
<? include("table_head.php") ?>

<table cellspacing = "0px">
  <tr>
	<th>Rank</th>
	<th>Player name</th>
	<th>Nation</th>
	<th>Level</th>
	<th>Enemy kills</th>
	<th>Honour</th>
  </tr>
	<?php mysql_connect($mysql_ip, $mysql_user, $mysql_pw); mysql_select_db($mysql_db);
		$sql = mysql_query("SELECT char_name, Nation, Level, EK, elo FROM char_database
			WHERE AdminLevel=0 ORDER BY EK DESC LIMIT 100");

	$i = 1; 
	while($row = mysql_fetch_array($sql)) {  
		if($row['Nation'] == 'NONE' && $row['Level'] > 50)
			continue;
		printf("<tr class=\"row%d\">", ($i % 2));
		printf("<td>%d</td>", $i);
		printf("<td>%s</td>", $row['char_name']);
	
		if($row['Nation'] == 'aresden') {
			echo("<td class=\"ares\">Aresden</td>"); 
		} else if($row['Nation'] == 'elvine') {
			echo("<td class=\"elv\">Elvine</td>"); 
		} else {
			echo("<td class=\"rax\">Rax Raider</td>"); 
		}

		printf("<td>%d</td>", $row['Level']);
		printf("<td>%d</td>", $row['EK']);
		printf("<td>%d</td></tr>", $row['elo']);
		$i++; 
	} ?>
</table>

<?php include("table_foot.php") ?>
<?php include("post_foot.php"); ?>
<?php include("footer.php"); ?>

