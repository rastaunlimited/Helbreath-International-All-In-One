<? $pagetitle = "Armors" ?>
<? include("header.php"); ?>

<div id="armors">
<? $posttitle = "Armors" ?>
<? include("post_head.php"); ?>


<h2>Contents</h2>
<ul class="contents">
<li><a href="#Armor_Attributes">Armor Attributes</a></li>
<li><a href="#Upper_Body_Armor">Upper Body Armor</a></li>
<li><a href="#Robes">Robes</a></li>
<li><a href="#Headgear">Headgear</a></li>
<li><a href="#Lower_Body_Armor">Lower Body Armor</a></li>
<li><a href="#Shields">Shields</a></li>
</ul>
<? include("post_foot.php"); ?>

<? $posttitle = "Armor Attributes"; $postid = "Armor_Attributes"?>
<? include("post_head.php"); ?>

<p class="attribtitle">Anti-Physical (AP). Also known as as Defense Ratio (DR)</p>

<p>Anti Physical armor makes the wearer harder to be hit by physical attacks. 2 AP points is equal to 1 extra point of Dexterity (only counts for evading attacks not your own accuracy).</p>
<p class="attribtitle">Magic-Resistance (MR)</p>
<p>Magic-Resistance armor makes the wearer less prone to be hit by magic attacks. To really see any significant difference, you need to have at least 180 MR points with all your armor combined.</p>
<p class="attribtitle">HP Recovery (HP)</p>
<p>Recovers your HP more by the % value of the armor. Ex: 21% HP recovery hauberk would make you gain health points by 21% more HP at a time.</p>
<p class="attribtitle">MP Recovery (MP)</p>
<p>Recovers your MP more by the % value of the armor. Ex: 42% MP recovery Leather Armor would make you gain mana points by 42% more MP at a time.</p>
<p class="attribtitle">Magic Absorbtion (MA)</p>
<p>Magic Absorbtion armor will absorb magic attacks directly into the armor, so the wearer will take less damage. 
*Note* MA armor does stack based on how much of it you have on total with all your armor %'s combined.
Ex: You get hit -100 magic damage but your armor is 50% MA, you only take 50 damage. There is a maof 80%</p>
<p class="attribtitle">Physical Absorbtion (PA)</p>
<p>Physical Absorbtion armor will absorb physical attacks directly into the armor, so the wearer will take less damage.*Note* PA does not stack. 
The damage is removed according to the PA on the part that is hit. Ex: You get hit -100 physical damage that hit's a 21% PA armor you are wearing,
you will only take 21 damage less than you would otherwise (In built PA, Shields, Msheilds, etc also reduce damage).</p>

<? include("post_foot.php"); ?>


<? $posttitle = "Upper Body Armor"; $postid = "Upper_Body_Armor"?>
<? include("post_head.php"); ?>

<p>Protection for the chest and the upper limbs this armor is typically associated with warriors, but is also used very effectively by mages. 
Armors have been used throughout history, beginning with hides and different leathers before progressing to bronze, then steel during 
the Middle Ages. Some upper body armor that are dropped by monsters may carry extra attributes listed at the top of this page.</p>
<? include("table_head.php") ?>
<table cellspacing="0px">
<tr>
	<th>Name </th><th>Defense</th><th>Phys. Abs.</th><th>Endurance</th><th>Price</th><th>Req.</th><th>Picture</th>
</tr>
<tr><td>Hauberk
</td><td>8
</td><td>10%
</td><td>200
</td><td>400
</td><td>None
</td><td><img src="http://www.hbportal.net/images/Haubm.gif" alt="Image:haubm.gif" width="50" height="48" /><img src="http://www.hbportal.net/images/Haubw.gif" alt="Image:haubw.gif" width="43" height="47" />
</td></tr>

<tr><td>Knight Hauberk
</td><td>12
</td><td>12%
</td><td>1000
</td><td>2400
</td><td>Level 70 <br /> 100 Dexterity
</td><td><img src="http://www.hbportal.net/images/Knighthaubm.gif" alt="Image:knighthaubm.gif" width="54" height="53" /><img src="http://www.hbportal.net/images/Knighthaubw.gif" alt="Image:knighthaubw.gif" width="44" height="50" />
</td></tr>

<tr><td>Wizard Hauberk
</td><td>12
</td><td>12%
</td><td>500
</td><td>2400
</td><td>Level 90<br /> 100 Magic
</td><td><img src="http://www.hbportal.net/images/Knighthaubm.gif" alt="Image:knighthaubm.gif" width="54" height="53" /><img src="http://www.hbportal.net/images/Knighthaubw.gif" alt="Image:knighthaubw.gif" width="44" height="50" />
</td></tr>

<tr><td>Leather Armor
</td><td>10
</td><td>10%
</td><td>400
</td><td>500
</td><td>15 Strength
</td><td><img src="http://www.hbportal.net/images/Leatherm.gif" alt="Image:leatherm.gif" width="53" height="47" /><img src="http://www.hbportal.net/images/Leatherw.gif" alt="Image:leatherw.gif" width="25" height="35" />
</td></tr>

<tr><td>Scale Mail
</td><td>20
</td><td>20%
</td><td>600
</td><td>900
</td><td>20 Strength
</td><td><img src="http://www.hbportal.net/images/Scalem.gif" alt="Image:scalem.gif" width="43" height="46"  /><img src="http://www.hbportal.net/images/Scalew.gif" alt="Image:scalew.gif" width="32" height="39" />
</td></tr>

<tr><td>Chain Mail
</td><td>30
</td><td>32%
</td><td>1000
</td><td>1200
</td><td>30 Strength
</td><td><img src="http://www.hbportal.net/images/Chainmalem.gif" alt="Image:chainmalem.gif" width="60" height="47" /><img src="http://www.hbportal.net/images/Chainmailw.gif" alt="Image:chainmailw.gif" width="56" height="47"  />
</td></tr>

<tr><td>Plate Mail
</td><td>37
</td><td>40%
</td><td>3000
</td><td>4500
</td><td>100 Strength
</td><td><img src="http://www.hbportal.net/images/Platem.gif" alt="Image:platem.gif" width="42" height="53" /><img src="http://www.hbportal.net/images/Platew.gif" alt="Image:platew.gif" width="37" height="46" />
</td></tr>

<tr><td>Knight Plate Mail
</td><td>40
</td><td>42%
</td><td>3500
</td><td>6000
</td><td>Level 85 <br /> 100 Strength
</td><td><img src="http://www.hbportal.net/images/Knightplatem.gif" alt="Image:knightplatem.gif" width="43" height="57" /><img src="http://www.hbportal.net/images/Knightplatew.gif" alt="Image:knightplatew.gif" width="39" height="50" />
</td></tr></table>
<? include("table_foot.php") ?>
<? include("post_foot.php"); ?>

<? $posttitle = "Robes"; $postid = "Robes"?>
<? include("post_head.php"); ?>

<p>Robes are usually only worn by mages, and are also considered a type of armor. Normal Robes can be dyed different colors, 
Wizard robes cannot be dyed however. Unlike other armors, Robes are bought at the shop instead of Blacksmith's.</p>
<? include("table_head.php") ?>
<table cellspacing = "0px">
<tr>
	<th>Name</th><th>Defense</th><th>Phys. Abs.</th><th>Endurance</th><th>Price</th><th>Req.</th><th>Picture</th>
</tr>
<tr>
<td>Robe
</td><td>10
</td><td>1%
</td><td>3000
</td><td>2000
</td><td>100 Magic
</td><td><img src="http://www.hbportal.net/images/Robem.gif" alt="Image:robem.gif" width="41" height="81" />
</td></tr>
<tr>
<td>Wizard Robe
</td><td>12
</td><td>10%
</td><td>3000
</td><td>3000
</td><td>Level 80 <br />100 Magic
</td><td><img src="http://www.hbportal.net/images/Robem.gif" alt="Image:robem.gif" width="41" height="81" />
</td></tr></table>
<? include("table_foot.php") ?>
<? include("post_foot.php"); ?>


<? $posttitle = "Headgear"; $postid = "Headgear"?>
<? include("post_head.php"); ?>

<? include("table_head.php") ?>
<table cellspacing = "0px">
<tr>
	<th>Name</th><th>Defense</th><th>Phys. Abs.</th><th>Endurance</th><th>Price</th><th>Req.</th><th>Picture</th>
</tr>
<tr><td>Helm
</td><td>5
</td><td>10%
</td><td>1000
</td><td>1000
</td><td>52 Strength
</td><td><img src="http://www.hbportal.net/images/Lighthelm.gif" alt="Image:lighthelm.gif" width="13" height="17" />
</td></tr>

<tr><td>Full Helm
</td><td>10
</td><td>20%
</td><td>1400
</td><td>1500
</td><td>85 Strength
</td><td><img src="http://www.hbportal.net/images/Helm.gif" alt="Image:helm.gif" width="15" height="24" />
</td></tr>

<tr><td>Knight Full Helm
</td><td>12
</td><td>22%
</td><td>2000
</td><td>3500
</td><td>85 Strength
</td><td><img src="http://www.hbportal.net/images/Knighthelm.gif" alt="Image:knighthelm.gif" width="20" height="28" />
</td></tr>

<tr><td>Wing Helm
</td><td>15
</td><td>22%
</td><td>2500
</td><td>5000
</td><td>Level 100 <br /> 130 Strength
</td><td><img src="http://www.hbportal.net/images/Winghelm.gif" alt="Image:winghelm.gif" width="23" height="24"  />
</td></tr>

<tr><td>Horned Helm
</td><td>17
</td><td>24%
</td><td>3500
</td><td>4000
</td><td>Level 120<br />  160 Strength
</td><td><img src="http://www.hbportal.net/images/Hornhelm.gif" alt="Image:hornhelm.gif" width="22" height="28" />
</td></tr>

<tr><td>Mage Cap
</td><td>5
</td><td>10%
</td><td>500
</td><td>1500
</td><td>Level 90 <br />110 Magic
</td><td><img src="http://www.hbportal.net/images/Hood.gif" alt="Image:hood.gif" width="20" height="17" />
</td></tr>

<tr><td>Wizard Hat
</td><td>10
</td><td>15%
</td><td>800
</td><td>3000
</td><td>Level 120 <br />130 Magic
</td><td><img src="http://www.hbportal.net/images/Wizhat.gif" alt="Image:wizhat.gif" width="30" height="24" />
</td></tr></table>
<? include("table_foot.php") ?>
<? include("post_foot.php"); ?>

<? $posttitle = "Lower Body Armor"; $postid = "Lower_Body_Armor"?>
<? include("post_head.php"); ?>

<p>Lower Body armor, just like Upper Body Armor, is typically associated with warriors, but is also used very effectivly by mages. 
Some lower body armor that are dropped by monsters may carry extra attributes listed at the top of this page.</p>
<? include("table_head.php") ?>
<table cellspacing = "0px">
<tr>
	<th>Name</th><th>Defense</th><th>Phys. Abs.</th><th>Endurance</th><th>Price</th><th>Req.</th><th>Picture</th>
</tr>
<tr><td>Chain Hose
</td><td>6
</td><td>10%
</td><td>500
</td><td>500
</td><td>10 Strength
</td><td><img src="http://www.hbportal.net/images/Chainhosem.gif" alt="Image:chainhosem.gif" width="28" height="60" /><img src="http://www.hbportal.net/images/Chainhosew.gif" alt="Image:chainhosew.gif" width="20" height="58"  />
</td></tr>

<tr><td>Plate Legs
</td><td>12
</td><td>20%
</td><td>1000
</td><td>1000
</td><td>20 Strength
</td><td><img src="http://www.hbportal.net/images/Platelegsm.gif" alt="Image:platelegsm.gif" width="25" height="62" /><img src="http://www.hbportal.net/images/Platelegsw.gif" alt="Image:platelegsw.gif" width="20" height="58"  />
</td></tr>

<tr><td>Knight Plate Legs
</td><td>15
</td><td>22%
</td><td>1100
</td><td>3000
</td><td>Level 80 <br />20 Strength
</td><td><img src="http://www.hbportal.net/images/Knightlegsm.gif" alt="Image:knightlegsm.gif" width="26" height="68"  /><img src="http://www.hbportal.net/images/Knightlegsw.gif" alt="Image:knightlegsw.gif" width="22" height="58"  />
</td></tr></table>
<? include("table_foot.php") ?>
<? include("post_foot.php"); ?>

<? $posttitle = "Shields"; $postid = "Shields"?>
<? include("post_head.php"); ?>

<p>Just like armors some shields that are dropped by monsters may carry extra attributes listed at the top of this page.
Shields cannot be used with two-handed weapons.</p>

<? include("table_head.php") ?>
<table cellspacing = "0px">
<tr>
<th> Picture </th><th> Name </th><th> Defense </th><th> Phys. Abs. </th><th> Endurance </th>
<th> Price </th><th> Req. </th><th> Description </th>
</tr>

<tr><td><img src="http://www.hbportal.net/images/Woodshield.gif" alt="Image:Woodshield.gif" width="31" height="27" />
</td><td>Wood Shield
</td><td>8
</td><td>5%
</td><td>300
</td><td>25
</td><td>8 Strength
</td><td>-
</td></tr>

<tr>
<td><img src="http://www.hbportal.net/images/Leathershield.gif" alt="Image:Leathershield.gif" width="34" height="32" />
</td><td>Leather Shield
</td><td>10
</td><td>6%
</td><td>300
</td><td>50
</td><td>10 Strength
</td><td>-
</td></tr>

<tr><td><img src="http://www.hbportal.net/images/Tagreshield.gif" alt="Image:Tagreshield.gif" width="36" height="30" />
</td><td>Targe Shield
</td><td>13
</td><td>8%
</td><td>500
</td><td>75
</td><td>18 Strength
</td><td>-
</td></tr>

<tr><td><img src="http://www.hbportal.net/images/Scootermshield.gif" alt="Image:Scootermshield.gif" width="32" height="38" />
</td><td>Scooterm Shield
</td><td>16
</td><td>10%
</td><td>500
</td><td>125
</td><td>20 Strength
</td><td>-
</td></tr>

<tr><td><img src="http://www.hbportal.net/images/Bronzeshield.gif" alt="Image:Bronzeshield.gif" width="31" height="39" />
</td><td>Bronze Shield
</td><td>18
</td><td>12%
</td><td>500
</td><td>175
</td><td>20 Strength
</td><td>-
</td></tr>

<tr><td><img src="http://www.hbportal.net/images/Ironshield.gif" alt="Image:Ironshield.gif" width="34" height="38" />
</td><td>Iron Shield
</td><td>22
</td><td>14%
</td><td>500
</td><td>250
</td><td>25 Strength
</td><td>-
</td></tr>

<tr><td><img src="http://www.hbportal.net/images/Lagishield.gif" alt="Image:Lagishield.gif" width="37" height="48" />
</td><td>Lagi Shield
</td><td>26
</td><td>17%
</td><td>800
</td><td>325
</td><td>30 Strength
</td><td>-
</td></tr>

<tr><td><img src="http://www.hbportal.net/images/Kiteshield.gif" alt="Image:Kiteshield.gif" width="36" height="40" />
</td><td>Kite Shield
</td><td>30
</td><td>20%
</td><td>800
</td><td>450
</td><td>32 Strength
</td><td>-
</td></tr>

<tr><td><img src="http://www.hbportal.net/images/Towershield.gif" alt="Image:Towershield.gif" width="41" height="59" />
</td><td>Tower Shield
</td><td>35
</td><td>23%
</td><td>800
</td><td>575
</td><td>40 Strength
</td><td>-
</td></tr>

<tr><td><img src="http://hbportal.net/images/Merien_shield.png" alt="Image:Merien_shield.gif" width="40" height="57" />
</td><td>Merien Shield
</td><td>50
</td><td>33%
</td><td>1600
</td><td>Sold for 80,000
</td><td>Level 55 <br />40 Strength
</td><td>Special ability: <br /> Invincible for 60 seconds
</td></tr>
</table>
<? include("table_foot.php") ?>
<? include("post_foot.php"); ?>

</div>
<?php include("footer.php"); ?>