<? $pagetitle = "Top 25 Largest Guilds" ?>
<? include("header.php") ?>


<? $posttitle = "Top 25 Largest Guilds" ?>
<? include("post_head.php") ?>
<? include("table_head.php") ?>

<table cellspacing = "0px">
  <tr>
    <th>Rank</th>
    <th>Guild name</th>
    <th>Guild master</th>
    <th>Nation</th>
    <th>Members</th>
  </tr>
	<?php mysql_connect($mysql_ip, $mysql_user, $mysql_pw); mysql_select_db($mysql_db);
		$sql = mysql_query("SELECT GuildName, Nation, MasterName, NumberOfMembers
			FROM `guild` ORDER BY `NumberOfMembers` DESC LIMIT 25"); 

	$i = 1; 
	while($row = mysql_fetch_array($sql)) {  
		printf("<tr class=\"row%d\">", ($i % 2));
		printf("<td>%d</td>", $i);
		printf("<td>%s</td>", htmlspecialchars(str_replace('_', " ", $row['GuildName'])));
		printf("<td>%s</td>", $row['MasterName']);

		if ($row['Nation'] == 'istria') { 
			echo("<td class=\"ist\">Istria</td>");
		} else if($row['Nation'] == 'aresden') {
			echo("<td class=\"ares\">Aresden</td>"); 
		} else if($row['Nation'] == 'elvine') {
			echo("<td class=\"elv\">Elvine</td>"); 
		} else {
			echo("<td class=\"trav\">Traveller</td>"); 
		}

		printf("<td>%d</td></tr>", $row['NumberOfMembers']);
		$i++; 
	} ?>
</table>

<?php include("table_foot.php") ?>
<?php include("post_foot.php"); ?>
<?php include("footer.php"); ?>
