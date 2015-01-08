<? $pagetitle = "Version History" ?>
<?php include("header.php"); ?>

<!--
-->

<? $posttitle = "Changes made in 1.0c (server update)" ?>
<? include("post_head.php"); ?>
<ul>
<li>Change: Absolute Magic Protection now immunizes against Inhibition Magic Casting
<li>Fix: Hero set bonuses now work correctly
<li>Fix: Endurance increase on manufactured items
</ul>

<?php include("post_foot.php"); ?>



<? $posttitle = "Changes made in 1.0b (server update)" ?>
<? include("post_head.php"); ?>
<ul>
<li>Fix: Resurrection wand now works (100int, 100mag requirement)
<li>Change: Disabled crusade teleport when in enemy town
<li>Fix: Cape attributes not being retained when upgraded
<li>Fix: GMG mana not reducing when attacked
<li>Fix: Crusade losers being told they are the winners
<li>Fix: Crusade mana not being reset, causing early Meteor Strikes in following Crusade
<li>Fix: Some players being wrongly detected as hackers and banned to Bleeding Island
<li>Change: Increased time allowed while DC before reconnecting to arena (15sec -> 18sec)
</ul>

<?php include("post_foot.php"); ?>



<? $posttitle = "Changes made in 1.0" ?>
<? include("post_head.php"); ?>
<ul>
<li>New: Added Crusade event occurring at 7 PM on Thursdays and 1 PM on Sundays (CDT, UTC-6)
<li>Change: Lowered endurance damage by 5 on each hammer
<li>New: Added more quest for contribution of up to 1300
<li>Change: Xneck Hit prob (100->160) Mer neck def(70->80) SG neck def(35->40)
<li>Fixed: Ice storm not freezing
<li>Fix: /showalldmg crashing and concatenating to different chat msgs (spells, chat...)
<li>Improvement: Faster loading at startup and in-game speed improvements
<li>Change: Capture the Relic event times (Wednesday: 8->10 PM, Saturday: 11->1 PM)
<li>Fix: Recalling with relic on bag not dropping the relic
<li>New: Timestamping chat. /timestamp to toggle
<li>New: /ekscreenshot command for automatic screenshot upon Enemy kill
<li>Change: Fix: Changed weapon damages on Blood Sword, Dark Executor and Demon Slayer
<li>Change: Increased bonuses for Lightning blade and Dark Executor at day/night
<li>Change: Increased bonuses for Demon Slayer vs Demons
<li>Change: Hammer and Armour break now does full endu damage in arena to same town
<li>Change: Changed pits in middleland
<li>New: Added /notifyme command to notify you're when tabbed out and someone says your name
<li>Fix: Maj International service giving 1 Maj per LP instead of 2
<li>­Fix: Honor occasionally not changing
<li>New: Added functionality to automatically fill required items for manufacturing. Type /manufill to toggle.
<li>Changed: Increased rock spawn rate
<li>New: Ctrl+p on player to request party
<li>New: Magic shop now shows mana cost of spells
<li>Fix: Startup items being occasionally put in warehouse instead of bag
<li>Changed: Player names colours back to green for allies, red for foes and blue for travelers
</ul>

<?php include("post_foot.php"); ?>



<? $posttitle = "Changes made in 0.13c (server update)" ?>
<? include("post_head.php"); ?>
<ul>
<li>New: A prize has been added to the Capture the Relic event. Players from winning nation 
are now able to teleport to Middleland through their City Hall at the cost of 2,500 Gold.
<li>Change: Direction Bow now only has 75% chances of hitting anything in-between and 
a 50% chance of hitting the target twice if there is nothing in-between target and player
<li>Change: Reduced Magic Absorption on Demons and Gargoyles
<li>Change: Recall is now allowed when attack mode is disabled in arena
</ul>

<?php include("post_foot.php"); ?>




<? $posttitle = "Changes made in 0.13b" ?>
<? include("post_head.php"); ?>
<ul>
<li>Fixed a crashing bug upon logging a character
<li>Can now mine without holding down Ctrl while clicking
<li>Reduced time spent on immobility after being bumped
<li>Fixed a crashing bug that would occasionally happen while pressing Ctrl+T
</ul>

<?php include("post_foot.php"); ?>



<? $posttitle = "Changes made in 0.13" ?>
<? include("post_head.php"); ?>
<ul>
<li>Removed Istria. Istria players will have to choose between Aresden and Elvine at login
<li>Modified 2nd drops (most of them increased and added items or removed unnecessary ones)
<li>Added ctrl+click on minimap recall points to set next recall point 
<li>Re-enabled astoria's CTR event
<li>Added astoria's relic position on minimap
<li>Increased party limit to 25
<li>Music and Sound settings saved after game restart
<li>Both reputation and contribution affecting drops
<li>Added /showalldmg toggling command, to show all damages done by spells such as blizzard
<li>Reduced DK GS damage
<li>Reduced repair cost on MerienShield, Blood weapons
<li>Necklace Of Stone Golem: 25->35 def
<li>Necklace of Merien: 50->70 def
<li>Increased sells prices on Alchemy Parts
<li>Reduced times that some NPCs' dead bodies take to disappear
</ul>

<?php include("post_foot.php"); ?>



<? $posttitle = "Changes made in 0.12b (server update)" ?>
<? include("post_head.php"); ?>

<ul>
<li>Replaced the server's Network Adapter to help fix the lag and disconnects
<li>Fix for Relic holder not dropping relic in Astoria if killed by an ally
<li>Added notification upon login of Astoria event if event is currently being held
<li>Fixed for Berserk slate not working if you're already Berserked
</ul>

<?php include("post_foot.php"); ?>




<? $posttitle = "Changes made in 0.12" ?>
<? include("post_head.php"); ?>
<ul>
<li>Fixed the speed increase with tab glitch
<li>Added skill validation and correction to adjust skill percentages that are too high because of stat changing
<li>Fixed Xelima neck and magic jewels
<li>Removed drops for AGT,CGT,DT
<li>Removed Special Abilities from Construction Kits
<li>Automatically Delete structures after Astoria events
<li>Fixed not being able to summon after summon death
<li>Allowed food to be cast even with attack mode disabled on event
<li>Fix for getting stuck when trying to PC and move
<li>Fix for Red slates (Invincibility)
<li>Fix for AMP occasionally acting like PFA
<li>Increased armor drops with 2 stats
<li>Increased delay between mob actions (chiefly movement)
<li>Removed DK Hammer
<li>Set Sharp and Ancient stat back to +1 and +2 dice faces
<li>Added a tile grid (activated by /grid or /showgrid)
<li>Added a command to toggle big items on ground (/bigitems)
<li>The following preferences are now saved after client restart: /fps, /showgrid, /bigitems, Detail Level, Party Auto Accept
<li>Lowered costs of Weapons and Armors in shop
<li>Divided Spell learning costs by 5
<li>Greatly decreased damage done by Wyverns
<li>Added option to automatically accept party requests (in Party dialog)
<li>Cannot para players in same party
<li>Wyverns now only spawn as clairvoyant rather than Anti Physical/Magical
<li>Restricted repping from same IPs
<li>Set Armor Break to reduce 20 endurance from items instead of 15
<li>Hid unused skills (????s) in skill list
</ul>

<?php include("post_foot.php"); ?>



<? $posttitle = "Changes made in 0.11.1" ?>
<? include("post_head.php"); ?>

<ul>
<li>Fix for building structures in Astoria
<li>Armor break range changed to 3x3 instead of 1x1
<li>Remove Mag requirement on InternationalHat
<li>Fixed Ice Golems not hitting
<li>Fixed Spell ranges
<li>Fixed not being able to enter aresden and elvine cathedral
<li>Fixed Relic's aura appearing on players with no full swing
<li>Construction Kits for Astoria events buyable from Blacksmith
</ul>

<?php include("post_foot.php"); ?>



<? $posttitle = "Changes made in 0.11.0" ?>
<? include("post_head.php"); ?>

<ul>
<li>Added new map (Astoria)
<li>Added new event in Astoria (Capture the Relic) occurring at 6 PM on Monday, 3 PM on Wednesday and 8 AM on Saturday (Central Time, GMT/UTC-6)
<li>Prevented players from entering enemy buildings
<li>Max skill points set to 900 instead of 700
<li>Fixed minimap showing up party members that are on a different map
<li>Firebow no longer produces fire in safe zones (including buildings)
<li>Dynamic spells (Firewall, CK, etc) no longer work in Istria
<li>Fixed shield. Shield reduction is applied after armor reduction, not at same time
<li>Deactivated shield stripping
<li>Fixed PKs not showing up correctly
<li>Now can only recall 10 second after taking damage
<li>Changed /tooff and /toon to allow muting of multiple people and saving for next login
<li>Fixed poison/zerk bug on Travellers causing crashes
<li>Fixed trade
<li>Fixed not being able to repair expensive items such as Merien Shield
<li>Increased max party members to 12
<li>Changed item upgrade chance to standard percentages
<li>Made Ice elemental sword upgradeable
<li>Made items upgradable to +3 without the chance of losing
<li>Deactivated Energy sphere
<li>Fix for armour/cape colour bug when logging in
<li>Fixed illusioned players seeing invisible foes
<li>Fixed illusioned party members showing on minimap
<li>Deleted Fire Bows
<li>Removed Composite Bows from drops
</ul>

<?php include("post_foot.php"); ?>



<? $posttitle = "Changes made in 0.10" ?>
<? include("post_head.php"); ?>

<ul>
<li>Lowered DK weapons damage
<li>Upped rare items' damage
<li>Reduced damage on Blizzard
<li>Reduced damage on DK Hammer and DK Swords.
<li>Set DKHammer stripping rate to same as BH;
<li>Fixed a glitch that enabled players to run too fast
<li>Fixed Ice Elemental Necklace not working against monsters like Frosts
<li>Lucky gold ring set to 40% chance of save from death, and only takes 1hp instead of all but 1
<li>Fix for 0hp NPCs being alive and invincible till they regen
<li>New shield system (37.5% of hitting shield with 20% Shield skill, 75% for 100% shield)
<li>Shield hits only absorb damage based on shield PA
<li>PA on shields raised
<li>Added Illusion effect over character head
<li>Changed the stun rate formula on NPCs
<li>Fixed the map cleaner
<li>Fix for Ice ele not working against frost. Very likely fixes the guard freezing issue as well
<li>Increased SlimJelly drop (20%)
<li>Fixed blood items getting +70hp
<li>Position of Party members are now displayed on the minimap
<li>Fixed the 100 rep International service
</ul>

<?php include("post_foot.php"); ?>




<? $posttitle = "Changes made in 0.9" ?>
<? include("post_head.php"); ?>

<ul>
<li>Added music for istria (optional download on site(coming soon))
<li>Added Istria quests
<li>Fixed upgrading angel after +10 and success rate set to 100%
<li>Fixed safe zones in Istria and Istria buildings
<li>Action times reduced for all monsters
<li>Fixed NPCs casting magic too quickly
<li>Increased Ettins' HP
<li>Berserk set to last 60 seconds instead of 40.
<li>Fixed purchasing spells on travellers
<li>Spaced out Ogre pit in ML at 440, 360
<li>7 Beholders pit in TOH3 changed to 8 Dark Elves pit
<li>Direction Bows made to hit human players 1 time normal and 2 times on crits
<li>Firebow no longer creates fire when shooting next to you
<li>Getting a majestic point now reduces the exp required for 181, instead of setting the player's exp to 180's, and thus not losing any experience
<li>Fixed dropping or not getting item with International services when full
<li>Reduced probability of necklace crafting recipes
<li>Added a Real FPS counter (Helbreath's old counter showed incorrect values)
<li>Player description shows up as their nation's colour
<li>International services added: HP7 International Hat, MP7 International Helm, and Reputation points
<li>Bleeding Island ticket labeled as 100 gold cost instead of 330
<li>Added middleland's minimap white dots for Istria
<li>Fixed summons showing up as enemy to friendly players
<li>MIM changed to last 40 seconds
<li>MIM changed to not target friendly players (if ares casts it, only tgs elv)
<li>Fixed the map and sprite issues
<li>Fixed mana regen on NPCs
<li>Fix for crash in command hall when fire bowing NPC
<li>Angel upgrades displaying right maj required
<li>Max upgrade for angels set to +15
<li>Fixed AFKFlag setting player as traveler
<li>Added a third nation (Istria). Entrance is on the left of middleland.
<li><b>Added an auto-map cleaner. Items dropped from monsters disappear after 15 minute (2nd drops and items dropped from players disappear after 30 minutes).</b>
<li>Non economical skills achieved faster (Half the time it currently takes to get 100%
<li>Increased Blizzard damage
<li>Dire Boar pit reduced in number / spaced out so players can kill
<li>Raid Times: 1 minute on Monday to Thursday, 1 hour Friday to Sunday
<li>International point services through City Hall. (International points are acquired by donating. <a href="donate.php">Click here for more info</a>)
<li>Donation Hats for Mage : MP7/HP7 golden indestructible wizard hat, bound to character
<li>Donation Hats for Warrior : HP7/MP7 golden indestructible winged helmet, bound to character
</ul>

<?php include("post_foot.php"); ?>



<?php include("footer.php"); ?>
