<?php include("vars.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Helbreath International<? if(isset($pagetitle)) printf(" - %s",$pagetitle) ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="robots" content="index, follow" />
<meta name="keywords" content="Helbreath, International, Mmorpg, Free Online Game, Free, PVP, Magic, HB, Weapons, Monsters" />
<meta name="description" content="Helbreath International - The best helbreath server; with all new features, events, commands, and much more. Free to play and on high speed dedicated server." />
<link rel="shortcut icon" href="http://www.merrypic.com/files/ue45uxx8u8w9intqddnm.ico" />

<link href="css/style.css?2" media="all" rel="stylesheet" type="text/css" />

<link href="css/menu/dropdown.css?1" media="all" rel="stylesheet" type="text/css" />
<link href="css/menu/menutheme.css?1" media="all" rel="stylesheet" type="text/css" />

<!--[if lt IE 7]>
<script type="text/javascript" src="http://jqueryjs.googlecode.com/files/jquery-1.3.1.min.js"></script>
<script type="text/javascript" src="js/jquery/jquery.dropdown.js"></script>
<![endif]-->

<script type="text/javascript" src="scripts.js"></script>

</head>

<body>

<div id="container">
	
	<div id="header">
		<ul class="dropdown dropdown-horizontal" id="mainmenu">
		<li><a class="dir" href="index.php">News</a></li>
		<li><a class="dir" href="download.php">Download</a></li>
		<li><a href="#" class="dir">Resources</a>
			<ul>
				<li><a href="res_astoria.php">Astoria</a></li>
				<li><a href="armors.php">Armors</a></li>
				<li><a href="res_alchemy.php">Alchemy</a></li>
				<li><a href="res_crafting.php">Crafting</a></li>
				<li><a href="res_cmds.php">In-Game commands</a></li>
				<li><a href="res_monster.php">Monsters and drops</a></li>
				<li><a href="verhist.php">Version history</a></li>
				<li><a href="#">More coming soon</a></li>
<!--
				<li><a href="res_maps.php">Maps</a></li>
				<li><a href="#">Weapons</a></li>
				<li><a href="#">Jewelery</a></li>
				<li><a href="#">Misc.</a></li>
				<li><a href="#">Mining/Manufacturing</a></li>
				
-->
			</ul>
		</li>
		<li><a href="#" class="dir">Rankings</a>
			<ul>
				<li><a href="top100ek.php">Top 100 EK</a></li>
				<li><a href="top100ek_180.php">Top 100 EK (Level 180)</a></li>
				<li><a href="top100ek_rax.php">Top 100 EK (Rax raiders)</a></li>
				<li><a href="top100elohigh.php">Top 100 Highest Honor</a></li>
				<li><a href="top100elolow.php">Top 100 Lowest Honor</a></li>
				<li><a href="top25gldek.php">Top 25 Total Guild EKs</a></li>
				<li><a href="top25gldhnr.php">Top 25 Average Guild Honor</a></li>
				<li><a href="top25gldlrg.php">Top 25 Largest Guilds</a></li>
			</ul>			
		</li>
		<li><a href="#" class="dir">Community</a>
			<ul>
				<li><a href="http://forum.helbreathInternational.net/">Forums</a></li>
				<li><a href="cm_vent.php">Ventrilo</a></li>

<!--
				<li><a href="#">Screenshots</a></li>
				<li><a href="#">Videos</a></li>
-->
			</ul>
		</li>
		<li><a href="donate.php" class="dir">Donate</a></li>
		<li><a href="rules.php" class="dir">Rules</a></li>
		<li><a href="contact.php" class="dir">Contact</a></li>
		</ul>
		<a id="timeblock">Server Time: <span id="Time"></span></a>
		<div id="onlinestat"><? include("onlinestatus.php") ?></div>
	</div>
	<div id="content">