<? $pagetitle = "Alchemy" ?>
<? include("header.php") ?>	


<?php $posttitle = "Alchemy"; $postid = "alchemy" ?>
<?php include("post_head.php") ?>

<p>
  Alchemy is the art of creating potions by mixing ingredients in an alchemy bowl. The alchemy bowel can be purchased from the shop.
</p>
<p>
  Potions marked with an asterisk will give you results in a particular order of colors.
  For example: If you drink a skin color potion while your skin is the lightest color, it will change to the next darkest color.
  Using one again will change it to the darkest and the following one would return the skin to the lightest color.
  Sometimes you need to buy multiple potions to get the desired color.
</p>
<? include("table_head.php") ?>
<table cellspacing="0px">
<tr>
<th>Potion </th><th> Picture </th><th> Skill </th><th> Materials Needed </th><th> Effect

</th></tr>
<tr>
<td>Health Potion
</td><td><img src="http://www.hbportal.net/images/Smallred.gif" alt="Image:Smallred.gif " height="16" width="12" />
</td><td>20
</td><td>1 Slime Jelly, 1 Ant Leg, 1 Snake Tongue
</td><td>Gives 15-30 HP
</td></tr>

<tr>
<td>Mana Potion
</td><td><img src="http://www.hbportal.net/images/Smallblue.gif" alt="Image:Smallblue.gif" height="17" width="12" />
</td><td>20
</td><td>1 Slime Jelly, 1 Ant Horn, 1 Snake Skin
</td><td>Gives 15-30 MP
</td></tr>
<tr>
<td>Revitalizing Potion

</td><td><img src="http://www.hbportal.net/images/Smallgreen.gif" alt="Image:Smallgreen.gif" height="16" width="11" />
</td><td>20
</td><td>1 Slime Jelly, 1 Scorpion Pincers, 1 Snake Meat
</td><td>Gives 15-30 SP
</td></tr>
<tr>
<td>Dilution Potion
</td><td><img src="http://www.hbportal.net/images/Smallgreen.gif" alt="Image:Smallgreen.gif" height="16" width="11" />
</td><td>30
</td><td>1 Slime Jelly, 1 Scorpion Sting, 1 Orc Teeth, 2 Snake Teeth

</td><td>Gives 20% Poison Resistance
</td></tr>
<tr>
<td>Big Health Potion
</td><td><img src="http://www.hbportal.net/images/Bigred.gif" alt="Image:Bigred.gif" height="25" width="28" />
</td><td>40
</td><td>3 Slime Jellies, 1 Snake Tongue, 1 Ant Leg, 1 Troll Meat

</td><td>Gives 30-60 HP
</td></tr>
<tr>
<td>Big Mana Potion
</td><td><img src="http://www.hbportal.net/images/Bigblue.gif" alt="Image:Bigblue.gif" height="24" width="27" />
</td><td>40
</td><td>3 Slime Jellies, 1 Snake Skin, 1 Ant Horn, 1 Cyclops Meat
</td><td>Gives 30-60 MP

</td></tr>
<tr>
<td>Big Revitalizing Pot
</td><td><img src="http://www.hbportal.net/images/Biggreen.gif" alt="Image:Biggreen.gif" height="24" width="26" />
</td><td>40
</td><td>2 Slime Jellies, 1 Scorpion Pincer, 2 Snake Meat, 1 Snake Skin
</td><td>Gives 30-60 SP
</td></tr>

<tr>
<td>Invisibility Potion
</td><td><img src="http://www.hbportal.net/images/Smallgreen.gif" alt="Image:Smallgreen.gif" height="16" width="11" />
</td><td>50
</td><td>1 Slime Jelly, 1 Skeleton Bone, 1 Orc Teeth, 1 Orc Meat
</td><td>Makes user invisible even right after attack

</td></tr>
<tr>
<td>Hair Color Potion*
</td><td><img src="http://www.hbportal.net/images/Smallgreen.gif" alt="Image:Smallgreen.gif" height="16" width="11" />
</td><td>60
</td><td>1 Slime Jelly, 1 Lump of Clay, 1 Scorpion Meat, 1 Snake Meat
</td><td>Changes user's hair color
</td></tr>

<tr>
<td>Underwear Color Potion*
</td><td><img src="http://www.hbportal.net/images/Smallgreen.gif" alt="Image:Smallgreen.gif" height="16" width="11" />
</td><td>60
</td><td>1 Slime Jelly, 1 Scorpion Pincer, 1 Scorpion Skin, 1 Scorpion Sting, 1 Hellhound Claw, 1 Salmon

</td><td>Changes user's underwear color
</td></tr>
<tr>
<td>Hair Style Potion*
</td><td><img src="http://www.hbportal.net/images/Smallgreen.gif" alt="Image:Smallgreen.gif" height="16" width="11" />
</td><td>70
</td><td>1 Slime Jelly, 1 Stone Golem Piece, 1 Snake Meat, 1 Hellhound Tongue
</td><td>Changes users's hair style

</td></tr>
<tr>
<td>Super SP Potion
</td><td><img src="http://www.hbportal.net/images/Smallgreen.gif" alt="Image:Smallgreen.gif" height="16" width="11" />
</td><td>70
</td><td>1 Slime Jelly, 1 Pumpkin, 1 Hellhound Heart, 1 Ant Leg
</td><td>Unlimited SP for 30 mins
</td></tr>

<tr>
<td>Super HP Potion
</td><td><img src="http://www.hbportal.net/images/SuperRedPot.gif" alt="Image:SuperRedPot.gif" height="35" width="27" />
</td><td>75
</td><td>1 Slime Jelly, 1 Barley, 1 Troll Heart, 1 Ant Antenna
</td><td>Increases HP by approx 200
</td></tr>
<tr>

<td>Super MP Potion
</td><td><img src="http://www.hbportal.net/images/SuperBluePot.gif" alt="Image:SuperBluePot.gif" height="35" width="25" />
</td><td>75
</td><td>1 Slime Jelly, 1 Water Melon, 1 Orc Meat, 1 Cyclops Heart
</td><td>Increases MP by approx 200
</td></tr>
<tr>
<td>Skin Color Potion*

</td><td><img src="http://www.hbportal.net/images/Smallgreen.gif" alt="Image:Smallgreen.gif" height="16" width="11" />
</td><td>90
</td><td>1 Slime Jelly, 1 Lump of Clay, 1 Hellhound Tail, 1 Snake Teeth
</td><td>Changes user's skin color
</td></tr>
<tr>
<td>Anti-Freeze Potion
</td><td><img src="http://www.hbportal.net/images/Unfreezepot.gif" alt="Image:Unfreezepot.gif" height="30" width="18" />

</td><td>90
</td><td>1 Slime Jelly, 1 Scorpion Sting, 1 Cyclops Leather, 1 Orc Leather, 1 Werewolf Heart
</td><td>Removes 'Frozen' status from user
</td></tr>
<tr>

<td>Sex Change Potion
</td><td><img src="http://www.hbportal.net/images/Smallgreen.gif" alt="Image:Smallgreen.gif" height="16" width="11" />
</td><td>95
</td><td>1 Slime Jelly, 1 Ogre Heart, 1 Lump of Clay, 1 Cyclops Eye, 1 Skeleton Bone, 1 Troll Claw

</td><td>Changes to opposite sex (Use when your naked)
</td></tr>
<tr>
<td>Ogre Summon Potion
</td><td><img src="http://www.hbportal.net/images/Smallgreen.gif" alt="Image:Smallgreen.gif" height="16" width="11" />
</td><td>100
</td><td>1 Troll Heart, 1 Ogre Heart, 1 Ogre Skin, 1 Ogre Meat, 1 Ogre Claw, 1 Ogre Hair

</td><td>Summons an ogre to your aid
</td></tr></table>
<? include("table_foot.php") ?>

<?php include("post_foot.php"); ?>

<?php include("footer.php"); ?>