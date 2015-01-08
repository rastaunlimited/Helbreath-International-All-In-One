<?php
include("online.php");
if(isset($_POST['code']) && isset($_POST['online'])) {
	if(is_numeric($_POST['online']) && $_POST['code']  == "L58sk2hK29dks") {
		$onlinefile = "online.php";
		$fh = fopen($onlinefile, 'w+') or die("0");
		$towrite = "<? \$online=" . $_POST['online'] . "; \$lastgsupdate=" . time() . ";?>";
		fwrite($fh, $towrite);
		fclose($fh);
	}
} else {
	if(isset($lastgsupdate)){
		if((time() - $lastgsupdate) > 80){
			echo("<div class=\"offline\">Server: Offline</div>");
		} else {
			echo("<div class=\"online\">Server Online - Players:  " . $online . "</div>");		
		}

	}
}
?>