<? 
$Defence[0] = array("Wood Shield","Targe Shield");
$Defence[1]	= $Defence[0]; //Only contains targe shield extra
$Defence[2] = array_merge($Defence[1],array("Blonde Shield","Hauberk","Chain Hose"));
$Defence[3] = array_merge($Defence[2],array("Leather Armor","Iron Shield"));
$Defence[4] = array_merge($Defence[3],array("Lagi Shield", "ChainMail","PlateMail"));
$Defence[5] = array_merge($Defence[4],array("ScaleMail","Knight Shield","Tower Shield","Helm","Full Helm")); //Platemail included in 4
$Defence[6] = array_merge($Defence[5],array("Cape"));
	
$Npcs = array(	"Abaddon" => array ( "PicUrl" => "Abaddon.gif",
						"Weapon Drops" => array("-"),
						"Armour Drops" => array("-"),
						"Rare Drops" => array("-")
						),
				"Barlog" => array ( "PicUrl" => "Barlog.gif",
						"Weapon Drops" => array("GreatSword","Flameberge","Esterk","Rapier","MagicWand(MS20)"),
						"Armour Drops" => $Defence[5],
						"Rare Drops" => array("The Devastator")
						),
				"Beholder" => array ( "PicUrl" => "Beholder.gif",
						"Weapon Drops" => array("WarAxe","Esterk","Rapier","MagicWand(MS10)"),
						"Armour Drops" => $Defence[3],
						"Rare Drops" => array("Cancel Manual")
						),
				"Bunny" => array ( "PicUrl" => "Bunny.gif",
						"Weapon Drops" => array("None"),
						"Armour Drops" => $Defence[0],
						"Rare Drops" => array("None")
						),
				"Cannibal Plant" => array ( "PicUrl" => "Cannibalplant_ani.gif",
						"Weapon Drops" => array("WarAxe","Esterk","Rapier","MagicWand(MS10)"),
						"Armour Drops" => $Defence[3],
						"Rare Drops" => array("Ruby Ring","Ring Of Wizard","Lucky Gold Ring","Sapphire Ring","Ring Of Mage","Emerald Ring")
						),
				"Cat" => array ( "PicUrl" => "Cat.gif",
						"Weapon Drops" => array("Dagger", "Short Sword", "Light Axe"),
						"Armour Drops" => $Defence[0], 
						"Rare Drops" => array("None")
						),
				"Centarus" => array ( "PicUrl" => "Centarus.gif",
						"Weapon Drops" => array("GreatSword","Flameberge","Esterk","Rapier","MagicWand(MS20)"),
						"Armour Drops" => $Defence[5],
						"Rare Drops" => array("None")
						),
				"Claw Turtle" => array ("PicUrl" => "Clawturtle.gif",
						"Weapon Drops" => array("WarAxe","Esterk","Rapier","MagicWand(MS10)"),
						"Armour Drops" => $Defence[3],
						"Rare Drops" => array("None")
						),
				"Clay Golem" => array ("PicUrl" => "Claygolem_ani.gif",
						"Body Parts" => array("Lump Of Clay"),
						"Weapon Drops" => array("LongSword","DoubleAxe","Sabre","Esterk","MagicWand(MS0)"),
						"Armour Drops" => $Defence[1],
						"Rare Drops" => array("Necklace Of Air Elemental","Necklace Of Merien")
						),
				"Cyclops" => array ("PicUrl" => "Cyclops.gif",
						"Body Parts" => array("Cyclops Meat","Cyclops Heart","Cyclops Eye","Cyclops HandEdge","Cyclops Leather"),
						"Weapon Drops" => array("WarAxe","Esterk","Rapier","MagicWand(MS10)"),
						"Armour Drops" => $Defence[3],
						"Rare Drops" => array("MagicNecklace(DF+10)","MagicNecklace(RM10)","Ring Of Ogre Power","MagicNecklace(DM+1)","MagicNecklace(MS10)",
											"Necklace Of Light Protection","Necklace Of Fire Protection","Cancel Manual")
						),
				"Dark Elf" => array ("PicUrl" => "Darkelf.gif",
						"Weapon Drops" => array("GreatSword","Flameberge","Claymore","Esterk","Rapier","MagicWand(MS10)"),
						"Armour Drops" => $Defence[4],
						"Rare Drops" => array("Dark Elf Bow")
						),
				"Demon" => array ( "PicUrl" => "Demon.gif",
						"Body Parts" => array("Demon Meat","Demon Leather","Demon Eye","Demon Heart"),
						"Weapon Drops" => array("GreatSword","Flameberge","Esterk","Rapier","BattleAxe","Flameberge+1","GiantSword","MagicWand(MS20)"),
						"Armour Drops" => $Defence[6],
						"Rare Drops" => array("MassFireStrike Manual","Ring Of Demon Power","Necklace Of Efreet","Blood Axe","Blood Rapier","Blood Sword","BloodyShockW.Manual",
											"Demon Slayer","Necklace Of Xelima","Resurrection Wand(MS.10)","Resurrection Wand(MS.20)","Berserk Wand(MS.10)","Berserk Wand(MS.20)")
						),
				"Dire Boar" => array ( "PicUrl" => "Direboar.gif",
						"Weapon Drops" => array("WarAxe","Esterk","Rapier","MagicWand(MS10)"),
						"Armour Drops" => $Defence[3],
						"Rare Drops" => array("GoldenAxe(LLF)")
						),
				"Dummy" => array ( "PicUrl" => "Dummi.gif",
						"Weapon Drops" => array("None"),
						"Armour Drops" => array("None"),
						"Rare Drops" => array("None")
						),
				"Ettin" => array ( "PicUrl" => "Ettin.gif",
						"Weapon Drops" => array("Claymore","Esterk","Rapier","Hammer","BattleHammer"),
						"Armour Drops" => $Defence[6],
						"Rare Drops" => array("Necklace Of Efreet","MassFireStrike Manual","Blood Axe","Blood Rapier","Ring Of Demon Power","BloodSword","Necklace Of Merien",
											"BloodyShockW.Manual","Demon Slayer","Berserk Wand(MS.10)","E.S.W.Manual","Giant Battle Hammer","Berserk Wand(MS.20)")
						),
				"Fire Wyvern" => array ( "PicUrl" => "Firewyvern.gif",
						"Weapon Drops" => array("-"),
						"Armour Drops" => array("-"),
						"Rare Drops" => array("-")
						),
				"Frost" => array ( "PicUrl" => "Frost.gif",
						"Weapon Drops" => array("GreatSword","Flameberge","Esterk","Rapier","MagicWand(MS20)"),
						"Armour Drops" => $Defence[5],
						"Rare Drops" => array("MagicWand(M.Shield)","Ring Of GrandMage","IceStorm Manual","Necklace Of Ice Protection","Sword Of Ice Elemental",
											"MagicWand(MS30-LLF)","Necklace Of Ice Elemental","Ring Of Archmage","StormBringer")
						),
				"Gargoyle" => array ( "PicUrl" => "Gargoyle.gif",
						"Weapon Drops" => array("GreatSword","Flameberge","Esterk","Rapier","BattleAxe","Flameberge+1","GiantSword","MagicWand(MS20)"),
						"Armour Drops" => $Defence[6],
						"Rare Drops" => array("Ring Of Demon Power","MassFireStrike Manual","Ring Of Dragon Power","Necklace Of Efreet","Ring Of Xelima",
											"BloodyShockW.Manual","Dark Executor","Xelima Blade","Xelima Axe","Xelima Rapier","Excaliber","Ring Of Abaddon")
						),
				"Giant Ant" => array ( "PicUrl" => "Ant_ani.gif",
						"Body Parts" => array("Ant Leg","Ant Feeler"),
						"Weapon Drops" => array("Dagger", "Short Sword", "Light Axe"),
						"Armour Drops" => $Defence[0],
						"Rare Drops" => array("Necklace Of Poison Protection","Necklace Of Sufferent","Necklace Of Medusa")
						),
				"Giant Crayfish" => array ( "PicUrl" => "Giant_crayfish.gif",
						"Weapon Drops" => array("WarAxe","Esterk","Rapier","MagicWand(MS10)"),
						"Armour Drops" => $Defence[3],
						"Rare Drops" => array("None")
						),
				"Giant Frog" => array ( "PicUrl" => "Giantfrog_ani.gif",
						"Weapon Drops" => array("None"),
						"Armour Drops" => array("None"),
						"Rare Drops" => array("Ruby Ring","Ring Of Wizard","Ring Of Ogre Power","Lucky Gold Ring","Sapphire Ring","Ring Of Mage","Ring Of Demon Power","Emerald Ring")
						),
				"Giant Lizard" => array ( "PicUrl" => "Giant_lizard.gif",
						"Weapon Drops" => array("Claymore","Esterk","Rapier","Hammer","BattleHammer"),
						"Armour Drops" => $Defence[6],
						"Rare Drops" => array("None")
						),
				"Giant Plant" => array ( "PicUrl" => "Giant_plant.gif",
						"Weapon Drops" => array("WarAxe","Esterk","Rapier","MagicWand(MS10)"),
						"Armour Drops" => $Defence[3],
						"Rare Drops" => array("None")
						),
				"Helclaw" => array ( "PicUrl" => "Helclaw.gif",
						"Armour Drops" => array("PlateMail","Hauberk","Plate Leggings","Chain Hose","Tower Shield"),
						"Rare Drops" => array("Ring Of Demon Power","Ring Of Mage","Emerald Ring","MagicNecklace(DF+10)","MagicNecklace(MS10)","MagicNecklace(DM+1)",
											"Ring Of Ogre Power","Ring Of Wizard","Ruby Ring","MagicWand(M.Shield)", "Necklace Of Ice Protection","Ring Of Dragon Power",
											"Ring Of GrandMage","Sword Of Ice Elemental","Necklace Of Ice Elemental","Merien Shield","Necklace Of Medusa","Necklace Of Xelima")
						),
				"Helhound" => array ( "PicUrl" => "Helhound_ani.gif",
						"Body Parts" => array("Helbound Teeth","Helbound Claw","Helbound Leather","Helbound Tail","Helbound Heart","Helbound Tongue"),
						"Weapon Drops" => array("Sabre","Esterk","Falchion","Rapier","Scimitar","MagicWand(MS10)"),
						"Armour Drops" => $Defence[2],
						"Rare Drops" => array("MagicNecklace(DF+10)","MagicNecklace(RM10)","Ring Of Ogre Power","MagicNecklace(DM+1)","MagicNecklace(MS10)",
											"Necklace Of Light Protection","Necklace Of Fire Protection")
						),
				"Ice Golem" => array ( "PicUrl" => "IceGolem.gif",
						"Weapon Drops" => array("GreatSword","Flameberge","Claymore","Esterk","Rapier","MagicWand(MS10)"),
						"Armour Drops" => $Defence[4],
						"Rare Drops" => array("MagicWand(M.Shield)", "Ring Of Mage", "Necklace Of Ice Protection", "Ring Of GrandMage")
						),
				"Liche" => array ( "PicUrl" => "Liche.gif",
						"Weapon Drops" => array("GreatSword","Flameberge","Esterk","Rapier","MagicWand(MS20)"),
						"Armour Drops" => $Defence[5],
						"Rare Drops" => array("MagicWand(M.Shield)","Ring Of GrandMage","MagicWand(MS30-LLF)","IceStorm Manual","Sword Of Ice Elemental","Necklace Of Ice Protection",
										"Necklace Of Ice Elemental","Ring Of Archmage","Necklace Of Liche","ResurWand(MS.10)","ResurWand(MS.20)","I.M.C Manual","Cancel Manual")
						),
				"Master Magic Orc" => array ( "PicUrl" => "Master_magic_orc.gif",
						"Weapon Drops" => array("Claymore","Esterk","Rapier","Hammer","BattleHammer"),
						"Armour Drops" => $Defence[6],
						"Rare Drops" => array("MagicWand(M.Shield)","Ring Of GrandMage","MagicWand(MS30-LLF)","Ring Of Archmage","I.M.C Manual","Cancel Manual")
						),
				"Minotaurs" => array ( "PicUrl" => "Minotaurs.gif",
						"Weapon Drops" => array("GreatSword","Flameberge","Claymore","Esterk","Rapier","MagicWand(MS10)"),
						"Armour Drops" => $Defence[4],
						"Rare Drops" => array("None")
						),
				"Mountain Giant" => array ( "PicUrl" => "MTgiant_ani.gif",
						"Weapon Drops" => array("Sabre","Scimitar","Falchion","Esterk","Rapier","Hammer"),
						"Armour Drops" => $Defence[6],
						"Rare Drops" => array("Ruby Ring","Necklace Of Merien","Necklace Of Air Elemental","Merien PlateMail","Merien Shield","Giant Battle Hammer")
						),
				"Nizie" => array ( "PicUrl" => "Nizie.gif",
						"Weapon Drops" => array("GreatSword","Flameberge","Esterk","Rapier","MagicWand(MS20)"),
						"Armour Drops" => $Defence[5],
						"Rare Drops" => array("None")
						),
				"Ogre" => array ( "PicUrl" => "Ogre.gif",
						"Body Parts" => array("Ogre Hair","Ogre Heart","Ogre Meat","Ogre Leather","Ogre Teeth","Ogre Claw"),
						"Weapon Drops" => array("GreatSword","Flameberge","Claymore","Esterk","Rapier","MagicWand(MS10)"),
						"Armour Drops" => $Defence[4],
						"Rare Drops" => array("MagicNecklace(DF+10)","MagicNecklace(RM10)","MagicNecklace(DM+1)","MagicNecklace(MS10)","Ring Of Ogre Power",
											"Necklace Of Light Protection","Necklace Of Fire Protection")
						),
				"Orc" => array ( "PicUrl" => "Orc.gif",
						"Body Parts" => array("Orc Meat","Orc Leather","Orc Teeth"),
						"Weapon Drops" => array("MainGauche","Gradius","Sexon Axe","Tomahoc","Sabre","Esterk","MagicWand(MS0)"),
						"Armour Drops" => $Defence[0],
						"Rare Drops" => array("Ruby Ring","Ring Of Wizard","Ring Of Ogre Power","LuckyGold Ring","Sapphire Ring","Emerald Ring","Ring Of Mage","Ring Of Demon Power")
						),
				"Orc Mage" => array ( "PicUrl" => "Orc.gif",
						"Body Parts" => array("Orc Meat","Orc Leather","Orc Teeth"),
						"Weapon Drops" => array("MainGauche","Gradius","Sexon Axe","Tomahoc","Sabre","Esterk","MagicWand(MS0)"),
						"Armour Drops" => $Defence[0],
						"Rare Drops" => array("Ruby Ring","Ring Of Wizard","Ring Of Ogre Power","LuckyGold Ring","Sapphire Ring","Emerald Ring","Ring Of Mage","Ring Of Demon Power")
						),
				"Rudolph" => array ( "PicUrl" => "Rudolph.gif",
						"Weapon Drops" => array("Sabre","Esterk","Falchion","Rapier","Scimitar","MagicWand(MS10)"),
						"Armour Drops" => $Defence[2],
						"Rare Drops" => array("MagicNecklace(DF+10)","MagicNecklace(RM10)","Ring Of Ogre Power","MagicNecklace(DM+1)","MagicNecklace(MS10)",
											"Necklace Of Light Protection","Necklace Of Fire Protection")
						),
				"Scorpion" => array ( "PicUrl" => "Scorpion.gif",
						"Weapon Drops" => array("MainGauche","Gradius","Sexon Axe","Tomahoc","Sabre","Esterk","MagicWand(MS0)"),
						"Armour Drops" => $Defence[0],
						"Rare Drops" => array("Ruby Ring","Ring Of Wizard","Ring Of Ogre Power","LuckyGold Ring","Sapphire Ring","Ring Of Mage","Ring Of Demon Power","Emerald Ring")
						),
				"Skeleton" => array ( "PicUrl" => "Skeleton.gif",
						"Body Parts" => array("Skeleton Bones"),
						"Weapon Drops" => array("MainGauche","Gradius","Sexon Axe","Tomahoc","Sabre","Esterk","MagicWand(MS0)"),
						"Armour Drops" => $Defence[0],
						"Rare Drops" => array("Ruby Ring","Ring Of Wizard","Ring Of Ogre Power","LuckyGold Ring","Sapphire Ring","Ring Of Mage","Ring Of Demon Power","Emerald Ring")
						),
				"Slime" => array ( "PicUrl" => "Slime.gif",
						"Body Parts" => array("Slime Jelly"),
						"Weapon Drops" => array("Dagger", "Short Sword", "Light Axe"),
						"Armour Drops" => $Defence[0],
						"Rare Drops" => array("None")
						),
				"Snake" => array ( "PicUrl" => "Snake.gif",
						"Body Parts" => array("Snake Meat","Snake Skin","Snake Teeth","Snake Tongue"),
						"Weapon Drops" => array("Dagger", "Short Sword", "Light Axe"),
						"Armour Drops" => $Defence[0],
						"Rare Drops" => array("Necklace Of Poison Protection","Necklace Of Sufferent","Necklace Of Medusa")
						),
				"Stalker" => array ( "PicUrl" => "Stalker.gif",
						"Weapon Drops" => array("GreatSword","Flameberge","Claymore","Esterk","Rapier","MagicWand(MS10)"),
						"Armour Drops" => $Defence[4],
						"Rare Drops" => array("GoldenAxe(LLF)")
						),
				"Stone Golem" => array ( "PicUrl" => "Stonegolem_ani.gif",
						"Weapon Drops" => array("LongSword","DoubleAxe","Sabre","Esterk","MagicWand(MS0)"),
						"Armour Drops" => $Defence[1],
						"Rare Drops" => array("Necklace Of Stone Golem","Necklace Of Merien","Necklace Of Air Elemental")
						),
				"Tentocle" => array ( "PicUrl" => "Tentocle.gif",
						"Weapon Drops" => array("None"),
						"Armour Drops" => array("None"),
						"Rare Drops" => array("None")
						),
				"Tigerworm" => array ( "PicUrl" => "Tigerworm.gif",
						"Armour Drops" => array("PlateMail","Hauberk","Plate Leggings","Chain Hose","Tower Shield"),
						"Rare Drops" => array("MagicNecklace(DF+10)","MagicNecklace(MS10)","MagicNecklace(DM+1)","Ring of Ogre power","Ring Of Dragon Power","Ring Of Xelima","Ring Of Abaddon",
									"Ring of Wizard","Ring Of Grand Mage","Ring Of Arch Mage","Ruby Ring","Emerald Ring","MagicWand(M.Shield)","Necklace Of Merien","I.M.C Manual","E.S.W.Manual",
									"Xelima Blade","Xelima Axe","Xelima Rapier","Merien PlateMail","Merien Shield","Cancel Manual","Giant Battle Hammer","Necklace Of Medusa","Necklace Of Xelima")
						),
				"Troll" => array ( "PicUrl" => "Troll.gif",
						"Body Parts" => array("Troll Meat","Troll Leather","Troll Claw","Troll Heart"),
						"Weapon Drops" => array("WarAxe","Esterk","Rapier","MagicWand(MS10)"),
						"Armour Drops" => $Defence[3],
						"Rare Drops" => array("Ruby Ring","Ring Of Wizard","Ring Of Ogre Power","Lucky Gold Ring","Sapphire Ring","Ring Of Mage","Ring Of Demon Power","Emerald Ring")
						),
				"Unicorn" => array ( "PicUrl" => "Unicorn.gif",
						"Body Parts" => array("Unicorn Leather","Unicorn Meat","Unicorn Heart","Unicorn Horn"),
						"Weapon Drops" => array("GreatSword","Flameberge","Esterk","Rapier","BattleAxe","Flameberge+1","GiantSword","MagicWand(MS20)"),
						"Armour Drops" => $Defence[5],
						"Rare Drops" => array("Necklace Of Air Elemental","Necklace Of Kloness","Merien PlateMail","Lighting Blade","Kloness Wand(MS.10)","Kloness Axe",
											"Kloness Blade","Kloness Esterk","Kloness Wand(MS.20)","Merien Shield")
						),
				"Werewolf" => array ( "PicUrl" => "Werewolf.gif",
						"Body Parts" => array("Werewolf Meat","Werewolf Heart","Werewolf Teeth","Werewolf Claw","Werewolf Tail","Werewolf Leather","Werewolf Nail"),
						"Weapon Drops" => array("GreatSword","Flameberge","Claymore","Esterk","Rapier","MagicWand(MS10)"),
						"Armour Drops" => $Defence[4],
						"Rare Drops" => array("GoldenAxe(LLF)")
						),
				"Wyvern" => array ( "PicUrl" => "Wyvern.gif",
						"Common Drops" => array("Zemstone Of Sacrifice","Stone Of Merien","Stone Of Xelima","MagicWand(M.Shield)","Ancient Tablet","Lucky Gold Ring","Sapphire Ring",
											"Ruby Ring","Golden Axe(LLF)","Magic Necklace(MS10)","Magic Necklace(DM+1)","Magic Necklace(DF+10)","Magic Necklace(RM10)","Emerald Ring"),
						"Rare Drops" => array("Ring Of Wizard","Ring Of GrandMage","Necklace Of Ice Protection","Sword Of Ice Elemental","Necklace Of Ice Elemental","Lighting Blade",
											"IceStorm Manual","Ring Of Archmage","Storm Bringer")
						),
				"Zombie" => array ( "PicUrl" => "Zombie.gif",
						"Weapon Drops" => array("MainGauche","Gradius","Sexon Axe","Tomahoc","Sabre","Esterk","MagicWand(MS0)"),
						"Armour Drops" => $Defence[0],
						"Rare Drops" => array("Necklace Of Poison Protection","Necklace Of Sufferent","Necklace Of Medusa")
						)
			);
	
 if(isset($_GET['m']) && array_key_exists($_GET['m'], $Npcs)) {

	$NpcName = $_GET['m'];
	
	$pagetitle = "Monsters - " . $NpcName;
 	include("header.php");	
	
	$PicUrlBase = "http://www.hbportal.net/images/"; 
	$posttitle = "Monster - " . $NpcName;
	include("post_head.php");

	echo "<table class=\"npc\"><tr><td>";
	
	echo "<table style=\"padding-right: 5px;\"><tr><td><img src=\"" . $PicUrlBase . $Npcs[$NpcName][PicUrl] . "\" alt=\"" . $NpcName . "\" /></td></tr>";
	echo "<tr><td><h3>" . $NpcName . "</h3></td></tr></table>";
	
	echo "</td><td width=\"78%\">";
	
	include("table_head.php");

	echo "<table cellspacing=\"0px\"><tr>";
	$Keys = array_keys($Npcs[$NpcName]);
	foreach($Keys as $k){
		if($k != "PicUrl")
			echo "<th>" . $k . "</th>";
	}
			
	echo "</tr><tr>";
	
	foreach($Npcs[$NpcName] as $k => $v){
		if($k != "PicUrl"){
			echo "<td>";
			foreach($v as $item)
				echo $item . "<br/>";
			echo "</td>";
		}
	}
		
		
	echo "</tr></table>";
	include("table_foot.php");
	
	echo "</td></tr></table>";
	
	include("post_foot.php");
	
	include("footer.php");
} else { 
	$pagetitle = "Monsters";
 	include("header.php");

	$posttitle = "Monsters";
	include("post_head.php");
?>

<table width="100%">
<tr>
<? 
$Keys = array_keys($Npcs);
for($j = 0; $j < 4; $j++){
	echo "<td width=\"25%\"><ul style=\"line-height:170%\">";
	for($i = ($j * 12); $i < (($j * 12) + 12); $i++){
		echo "<li><a href=\"?m=" . str_replace(" ", "%20", $Keys[$i]) . "\">" . $Keys[$i] . "</a></li>";
	}
	echo "</ul></td>";
}
unset($Keys);
?>
</tr>
</table>
<? 
include("post_foot.php");
include("footer.php");
} ?>