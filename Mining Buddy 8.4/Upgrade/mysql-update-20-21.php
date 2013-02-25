<?php

function Getbasesite($file)
{
	$find = '/';
	$after_find = substr(strrchr($file, $find), 1); 
	$strlen_str = strlen($after_find); 
	$result = substr($file, 0, -$strlen_str); 
	
	return $result; 
}

	$sitename = $_SERVER["SERVER_NAME"];
	$sitenamepath = $_SERVER["SCRIPT_NAME"];
	$pathsite = $sitename.$sitenamepath;
	
	$upgrade=$_REQUEST['upgrade'];

	include ("./etc/config.$sitename.php");
	
	$file = $pathsite;
	
	$site = Getbasesite($file);

	$db_conn = mysql_connect($mysql_hostname, $mysql_username, $mysql_password);
mysql_select_db($mysql_dbname);



if ($upgrade=='1' ){
	
	echo "Upgrading Config Table!";
	echo "<br>";
	$configupgrade0 = mysql_query("INSERT INTO `config` (`name`, `value`) VALUES
				('AssaultShipEnabled', '0'), ('BattlecruiserEnabled', '0'), ('BattleshipEnabled', '0'), ('CarrierEnabled', '0'),
				('CommandShipEnabled', '0'), ('CovertOpsEnabled', '0'), ('CruiserEnabled', '0'), ('DestroyerEnabled', '0'),
				('DreadnoughtEnabled', '0'), ('ExhumerEnabled', '0'), ('FreighterEnabled', '0'), ('FrigateEnabled', '0'),
				('HeavyAssaultShipEnabled', '0'), ('IndustrialEnabled', '0'), ('InterceptorEnabled', '0'), ('InterdictorEnabled', '0'),
				('LogisticsShipEnabled', '0'), ('MiningBargeEnabled', '0'), ('ReconShipEnabled', '0'), ('ShuttleEnabled', '0'),
				('TransportShipEnabled', '0'), ('CapitalIndustrialShipEnabled', '0');");
	
	echo "Adding shipvalues Table!";
	echo "<br>";
	$configupgrade1 = mysql_query("
		  CREATE TABLE IF NOT EXISTS `shipvalues` (
		   `id` int(5) NOT NULL auto_increment,
           `modifier` int(5) NOT NULL,
           `time` int(15) NOT NULL,
		   `AssaultShipValue` decimal(5,4) NOT NULL default '1.000',
		   `BattlecruiserValue` decimal(5,4) NOT NULL default '1.000',
		   `BattleshipValue` decimal(5,4) NOT NULL default '1.000',
		   `CarrierValue` decimal(5,4) NOT NULL default '1.000',
		   `CommandShipValue` decimal(5,4) NOT NULL default '1.000',
		   `CovertOpsValue` decimal(5,4) NOT NULL default '1.000',
		   `CruiserValue` decimal(5,4) NOT NULL default '1.000',
		   `DestroyerValue` decimal(5,4) NOT NULL default '1.000',
		   `DreadnoughtValue` decimal(5,4) NOT NULL default '1.000',
		   `ExhumerValue` decimal(5,4) NOT NULL default '1.000',
		   `FreighterValue` decimal(5,4) NOT NULL default '1.000',
		   `FrigateValue` decimal(5,4) NOT NULL default '1.000',
		   `HeavyAssaultShipValue` decimal(5,4) NOT NULL default '1.000',
		   `IndustrialShipValue` decimal(5,4) NOT NULL default '1.000',
		   `InterceptorValue` decimal(5,4) NOT NULL default '1.000',
		   `InterdictorValue` decimal(5,4) NOT NULL default '1.000',
		   `LogisticsShipValue` decimal(5,4) NOT NULL default '1.000',
		   `MiningBargeValue` decimal(5,4) NOT NULL default '1.000',
		   `ReconShipValue` decimal(5,4) NOT NULL default '1.000',
		   `ShuttleValue` decimal(5,4) NOT NULL default '1.000',
		   `TransportShipValue` decimal(5,4) NOT NULL default '1.000',
		   `CapitalIndustrialShipValue` decimal(5,4) NOT NULL default '1.000',
		  PRIMARY KEY  (`id`)
  		) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;
	");
	
	echo "Upgrading runs Table!";
	echo "<br>";
	$configupgrade2 = mysql_query("ALTER TABLE `runs`  ADD `shipGlue` INT(4) NOT NULL DEFAULT '0' AFTER `oreGlue`;");
	
	echo "Updating the config version number!";
	echo "<br>";
	$configupgrade3 = mysql_query("UPDATE config SET value='21' WHERE name='version'");
	
	echo "Upgrade Completed!";
	echo "<br>";
	echo "<a href=http://".$site.">Click here to Login</a>";
	
}else{

?>
<center>
This is the Mining Buddy SQL upgrade page.<br>
When you are ready to upgrade you Mining Buddy Install to the newest version click the link below<br>
<a href="mysql-update-20-21.php?upgrade=1">Upgrade Now</a>
<?
}
?>