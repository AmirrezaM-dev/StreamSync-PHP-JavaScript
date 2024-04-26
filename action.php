<?php
	if(isset($_GET['play'])){
		$myfile = fopen("actions.php", "w") or die("Unable to open file!");
		$txt = '$video.play();';
		fwrite($myfile, $txt);
		fclose($myfile);
	}else if(isset($_GET['currentTime'])){
		$myfile = fopen("actions.php", "w") or die("Unable to open file!");
		$txt = '$video.currentTime='.intval($_POST['currentTime']).';$video.pause();';
		fwrite($myfile, $txt);
		fclose($myfile);
	}else if(isset($_GET['pause'])){
		$myfile = fopen("actions.php", "w") or die("Unable to open file!");
		$txt = '$video.pause();';
		fwrite($myfile, $txt);
		fclose($myfile);
	}else if(isset($_GET['empty'])){
		$myfile = fopen("actions.php", "w") or die("Unable to open file!");
		$txt = '';
		fwrite($myfile, $txt);
		fclose($myfile);
	}
?>