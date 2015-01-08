<? $pagetitle = "Donate" ?>
<? include("header.php") ?>


<? $posttitle = "Donate" ?>
<? include("post_head.php") ?>

<p>
It costs a significant amount of money each month to keep Helbreath International running. 
To help pay for the costs, you can choose to either purchase International points 
(which can be traded in-game for the services shown below), or to donate. 
The list provided below shows the items and services that are available at 
your nation's City Hall after donating. We appreciate your support for the server.
</p>
<?php include("table_head.php") ?>
<table cellspacing = "0">
	<tr>
	<th>International Points</th>
	<th>Item/Service</th>
	</tr>
<tr><td>1</td><td>10,000 Gold</td></tr>
<tr><td>1</td><td>2 Majestic Points</td></tr>
<tr><td>1</td><td>10 Reputation Points</td></tr>
<tr><td>10</td><td>Town transfer for 1 character</td></tr>
<tr><td>25</td><td>Internationalnaire's Hat: MP7 golden indestructible<br /> wizard hat, bound to character</td></tr>
<tr><td>25</td><td>Internationalnaire's Hat: HP7 golden indestructible<br /> wizard hat, bound to character</td></tr>
<tr><td>25</td><td>Internationalnaire's Helm : HP7 golden indestructible<br /> winged helmet, bound to character</td></tr>
<tr><td>25</td><td>Internationalnaire's Helm : MP7 golden indestructible<br /> winged helmet, bound to character</td></tr>
</table>
<?php include("table_foot.php") ?>
<center>
<p><b>Get International points here:</b></p>
<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick" />

<input type="hidden" name="hosted_button_id" value="5558594" />
<table>
<tr><td><input type="hidden" name="on0" value="Account" />Account name:</td></tr>
<tr><td><input type="text" name="os0" maxlength="60" /></td></tr>
</table>
<input type="image" src="https://www.paypal.com/en_US/i/btn/btn_cart_LG.gif" name="submit" 
alt="PayPal - The safer, easier way to pay online!" />
<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1" />
</form>
</center>
<br /><br /><br />
<p>
The following are not yet available through game, but can be obtained by donating, instead of purchasing International points:
</p>

<?php include("table_head.php") ?>
<table cellspacing = "0">
	<tr>
	<th>Dollars</th>
	<th>Item/Service</th>
	</tr>
<tr><td>2.00</td><td>Zemstone of Sacrifice</td></tr>
<tr><td>2.00</td><td>Stone of Merien</td></tr>
<tr><td>2.00</td><td>Stone of Xelima</td></tr>
<tr><td>5.00</td><td>Character name change</td></tr>
<tr><td>10.00</td><td>Sex change of 1 armor piece</td></tr>
</table>
<?php include("table_foot.php") ?>
<br />

Note: Updates to this list will be implemented as necessary.
<br /><br />


<p>
All payments via paypal are to be made to <a href="mailto:helbreathInternational@hotmail.com">helbreathInternational@hotmail.com</a>. Be sure to attach to the payment
 a message including the name of your character. For any questions or concerns regarding other forms
 of payment or anything related to the Donation System, email the Head Administrator at <a href="mailto:brandon_parsons16@hotmail.com">brandon_parsons16@hotmail.com</a>.</p>

<?php include("post_foot.php"); ?>
<?php include("footer.php"); ?>
