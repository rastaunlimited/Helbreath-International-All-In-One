<? $pagetitle = "Commands" ?>
<? include("header.php") ?>


<? $posttitle = "In-Game Commands" ?>
<? include("post_head.php") ?>

<h4 style="text-align:center;" >The following are a set of commands which can be typed inside game for various effects:</h4><br />

<?php include("table_head.php") ?>
<table cellspacing = "0px">
	<tr>
	<th>Commands</th>
	<th>Effect</th>
	</tr>
<tr><td>/grid</td><td>Toggles visibility of tile grid</td></tr>
<tr><td>/bigitems</td><td>Switches between small and large ground items</td></tr>
<tr><td>/fps or /showframes</td><td>Shows a Frames per Second counter</td></tr>
<tr><td>/checkrep</td><td>Shows your reputation</td></tr>
<tr><td>/to PlayerName</td><td>Sets the whispering mode to PlayerName</td></tr>
<tr><td>/tooff PlayerName</td><td>Adds player to mute list which remains even after logout</td></tr>
<tr><td>/toon PlayerName</td><td>Removes player from your mute list</td></tr>
<tr><td>/ekscreenshot</td><td>Toggles screenshot upon ek on and off</td></tr>
<tr><td>/notifyme</td><td>Toggles notification when someone says your name while tabbed out</td></tr>
</table>

<?php include("table_foot.php") ?>

<?php include("post_foot.php"); ?>



<?php include("footer.php"); ?>
