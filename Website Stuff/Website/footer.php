	</div>
	<div id="footer">
		<a href="http://www.xtremetop100.com/in.php?site=1132271018"><img src="http://www.xtremetop100.com/votenew.jpg" alt="Vote at xtremetop100" /></a>
		<a href="http://hbtop20.com/"><img src="http://hbtop20.com/button.php?u=lifeplaysu420" alt="Vote at hbtop20" /></a>
		<a href="http://hbtop50.com/"><img src="http://hbtop50.com/button.php?u=International" alt="Vote at Helbreath Top 50" /></a>
		<a href="http://helbreath.top100gaming.info/Listings/"><img src="http://helbreath.top100gaming.info/Listings/button.php?u=lifeplaysu420" alt="Vote at top100gaming" /></a>		
		<br/>
<?php
  include("whosonline.php");
  session_start();
 
  //Create your connection
  $who=new WhosOnline('localhost',brandon_who,'Str%nG53!','brandon_who');
  //Set up the table you will use
  $who->TableSet("online", true);
  //Update the table with the new data
  $who->Update();
 
 
  //Echos the data
  if($who->Data() == 1)
    echo "There is currently " . $who->Data() . " guest online.<br/>";
  else
    echo "There are currently " . $who->Data() . " guests online.<br/>";
 ?>
<span><a href="http://validator.w3.org/check?uri=referer">XHTML 1.0 Valid</a> | <a href="/sitemap.php">Sitemap</a> | Site copyright © 2009 Helbreath International. All rights reserved.</span>
	</div>	
</div>
<script type="text/javascript">UpdateTime();</script>
</body>
</html>