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
	$configupgrade0 = mysql_query("INSERT INTO `config` (`name`, `value`) VALUES ('CondensedAlloyEnabled', '0')");
	$configupgrade1 = mysql_query("INSERT INTO `config` (`name`, `value`) VALUES ('CrystalCompoundEnabled', '0')");
	$configupgrade2 = mysql_query("INSERT INTO `config` (`name`, `value`) VALUES ('PreciousAlloyEnabled', '0')");
	$configupgrade3 = mysql_query("INSERT INTO `config` (`name`, `value`) VALUES ('SheenCompoundEnabled', '0')");
	$configupgrade4 = mysql_query("INSERT INTO `config` (`name`, `value`) VALUES ('GleamingAlloyEnabled', '0')");
	$configupgrade5 = mysql_query("INSERT INTO `config` (`name`, `value`) VALUES ('LucentCompoundEnabled', '0')");
	$configupgrade6 = mysql_query("INSERT INTO `config` (`name`, `value`) VALUES ('DarkCompoundEnabled', '0')");
	$configupgrade7 = mysql_query("INSERT INTO `config` (`name`, `value`) VALUES ('MotleyCompoundEnabled', '0')");
	$configupgrade8 = mysql_query("INSERT INTO `config` (`name`, `value`) VALUES ('LusteringAlloyEnabled', '0')");
	$configupgrade9 = mysql_query("INSERT INTO `config` (`name`, `value`) VALUES ('GlossyCompoundEnabled', '0')");
	$configupgrade10 = mysql_query("INSERT INTO `config` (`name`, `value`) VALUES ('PlushhCompoundEnabled', '0')");
	$configupgrade11 = mysql_query("INSERT INTO `config` (`name`, `value`) VALUES ('OpulentCompoundEnabled', '0')");
	$configupgrade12 = mysql_query("INSERT INTO `config` (`name`, `value`) VALUES ('CartesianTemporalCoordinatorEnabled', '0')");
	$configupgrade13 = mysql_query("INSERT INTO `config` (`name`, `value`) VALUES ('CentralSystemControllerEnabled', '0')");
	$configupgrade14 = mysql_query("INSERT INTO `config` (`name`, `value`) VALUES ('DefensiveControlNodeEnabled', '0')");
	$configupgrade15 = mysql_query("INSERT INTO `config` (`name`, `value`) VALUES ('ElectromechanicalHullSheetingEnabled', '0')");
	$configupgrade16 = mysql_query("INSERT INTO `config` (`name`, `value`) VALUES ('EmergentCombatAnalyzerEnabled', '0')");
	$configupgrade17 = mysql_query("INSERT INTO `config` (`name`, `value`) VALUES ('EmergentCombatIntelligenceEnabled', '0')");
	$configupgrade18 = mysql_query("INSERT INTO `config` (`name`, `value`) VALUES ('FusedNanomechanicalEnginesEnabled', '0')");
	$configupgrade19 = mysql_query("INSERT INTO `config` (`name`, `value`) VALUES ('HeuristicSelfassemblersEnabled', '0')");
	$configupgrade20 = mysql_query("INSERT INTO `config` (`name`, `value`) VALUES ('JumpDriveControlNexusEnabled', '0')");
	$configupgrade21 = mysql_query("INSERT INTO `config` (`name`, `value`) VALUES ('MeltedNanoribbonsEnabled', '0')");
	$configupgrade22 = mysql_query("INSERT INTO `config` (`name`, `value`) VALUES ('ModifiedFluidRouterEnabled', '0')");
	$configupgrade23 = mysql_query("INSERT INTO `config` (`name`, `value`) VALUES ('NeurovisualInputMatrixEnabled', '0')");
	$configupgrade24 = mysql_query("INSERT INTO `config` (`name`, `value`) VALUES ('PowderedC540GraphiteEnabled', '0')");
	$configupgrade25 = mysql_query("INSERT INTO `config` (`name`, `value`) VALUES ('ResonanceCalibrationMatrixEnabled', '0')");
	$configupgrade26 = mysql_query("INSERT INTO `config` (`name`, `value`) VALUES ('ThermoelectricCatalystsEnabled', '0')");
	$configupgrade27 = mysql_query("INSERT INTO `config` (`name`, `value`) VALUES ('FulleriteC50Enabled', '0')");
	$configupgrade28 = mysql_query("INSERT INTO `config` (`name`, `value`) VALUES ('FulleriteC60Enabled', '0')");
	$configupgrade29 = mysql_query("INSERT INTO `config` (`name`, `value`) VALUES ('FulleriteC70Enabled', '0')");
	$configupgrade30 = mysql_query("INSERT INTO `config` (`name`, `value`) VALUES ('FulleriteC72Enabled', '0')");
	$configupgrade31 = mysql_query("INSERT INTO `config` (`name`, `value`) VALUES ('FulleriteC84Enabled', '0')");
	$configupgrade32 = mysql_query("INSERT INTO `config` (`name`, `value`) VALUES ('FulleriteC28Enabled', '0')");
	$configupgrade33 = mysql_query("INSERT INTO `config` (`name`, `value`) VALUES ('FulleriteC32Enabled', '0')");
	$configupgrade34 = mysql_query("INSERT INTO `config` (`name`, `value`) VALUES ('FulleriteC320Enabled', '0')");
	$configupgrade35 = mysql_query("INSERT INTO `config` (`name`, `value`) VALUES ('FilleriteC540Enabled', '0'");
	
	echo "Upgrading orevalues Table!";
	echo "<br>";
	$configupgrade36 = mysql_query("ALTER TABLE  `orevalues` ADD  `CondensedAlloyWorth` DECIMAL( 10, 2 ) NOT NULL DEFAULT  '0.00'");
	$configupgrade37 = mysql_query("ALTER TABLE  `orevalues` ADD  `CrystalCompoundWorth` DECIMAL( 10, 2 ) NOT NULL DEFAULT  '0.00'");
	$configupgrade38 = mysql_query("ALTER TABLE  `orevalues` ADD  `PreciousAlloyWorth` DECIMAL( 10, 2 ) NOT NULL DEFAULT  '0.00'");
	$configupgrade39 = mysql_query("ALTER TABLE  `orevalues` ADD  `SheenCompoundWorth` DECIMAL( 10, 2 ) NOT NULL DEFAULT  '0.00'");
	$configupgrade40 = mysql_query("ALTER TABLE  `orevalues` ADD  `GleamingAlloyWorth` DECIMAL( 10, 2 ) NOT NULL DEFAULT  '0.00'");
	$configupgrade41 = mysql_query("ALTER TABLE  `orevalues` ADD  `LucentCompoundWorth` DECIMAL( 10, 2 ) NOT NULL DEFAULT  '0.00'");
	$configupgrade42 = mysql_query("ALTER TABLE  `orevalues` ADD  `DarkCompoundWorth` DECIMAL( 10, 2 ) NOT NULL DEFAULT  '0.00'");
	$configupgrade43 = mysql_query("ALTER TABLE  `orevalues` ADD  `MotleyCompoundWorth` DECIMAL( 10, 2 ) NOT NULL DEFAULT  '0.00'");
	$configupgrade44 = mysql_query("ALTER TABLE  `orevalues` ADD  `LusteringAlloyWorth` DECIMAL( 10, 2 ) NOT NULL DEFAULT  '0.00'");
	$configupgrade45 = mysql_query("ALTER TABLE  `orevalues` ADD  `GlossyCompoundWorth` DECIMAL( 10, 2 ) NOT NULL DEFAULT  '0.00'");
	$configupgrade46 = mysql_query("ALTER TABLE  `orevalues` ADD  `PlushCompoundWorth` DECIMAL( 10, 2 ) NOT NULL DEFAULT  '0.00'");
	$configupgrade47 = mysql_query("ALTER TABLE  `orevalues` ADD  `OpulentCompoundWorth` DECIMAL( 10, 2 ) NOT NULL DEFAULT  '0.00'");
	$configupgrade48 = mysql_query("ALTER TABLE  `orevalues` ADD  `CartesianTemporalCoordinatorWorth` DECIMAL( 10, 2 ) NOT NULL DEFAULT  '0.00'");
	$configupgrade49 = mysql_query("ALTER TABLE  `orevalues` ADD  `CentralSystemControllerWorth` DECIMAL( 10, 2 ) NOT NULL DEFAULT  '0.00'");
	$configupgrade50 = mysql_query("ALTER TABLE  `orevalues` ADD  `DefensiveControlNodeWorth` DECIMAL( 10, 2 ) NOT NULL DEFAULT  '0.00'");
	$configupgrade51 = mysql_query("ALTER TABLE  `orevalues` ADD  `ElectromechanicalHullSheetingWorth` DECIMAL( 10, 2 ) NOT NULL DEFAULT  '0.00'");
	$configupgrade52 = mysql_query("ALTER TABLE  `orevalues` ADD  `EmergentCombatAnalyzerWorth` DECIMAL( 10, 2 ) NOT NULL DEFAULT  '0.00'");
	$configupgrade53 = mysql_query("ALTER TABLE  `orevalues` ADD  `EmergentCombatIntelligenceWorth` DECIMAL( 10, 2 ) NOT NULL DEFAULT  '0.00'");
	$configupgrade54 = mysql_query("ALTER TABLE  `orevalues` ADD  `FusedNanomechanicalEnginesWorth` DECIMAL( 10, 2 ) NOT NULL DEFAULT  '0.00'");
	$configupgrade55 = mysql_query("ALTER TABLE  `orevalues` ADD  `HeuristicSelfassemblersWorth` DECIMAL( 10, 2 ) NOT NULL DEFAULT  '0.00'");
	$configupgrade56 = mysql_query("ALTER TABLE  `orevalues` ADD  `JumpDriveControlNexusWorth` DECIMAL( 10, 2 ) NOT NULL DEFAULT  '0.00'");
	$configupgrade57 = mysql_query("ALTER TABLE  `orevalues` ADD  `MeltedNanoribbonsWorth` DECIMAL( 10, 2 ) NOT NULL DEFAULT  '0.00'");
	$configupgrade58 = mysql_query("ALTER TABLE  `orevalues` ADD  `ModifiedFluidRouterWorth` DECIMAL( 10, 2 ) NOT NULL DEFAULT  '0.00'");
	$configupgrade59 = mysql_query("ALTER TABLE  `orevalues` ADD  `NeurovisualInputMatrixWorth` DECIMAL( 10, 2 ) NOT NULL DEFAULT  '0.00'");
	$configupgrade60 = mysql_query("ALTER TABLE  `orevalues` ADD  `PowderedC540GraphiteWorth` DECIMAL( 10, 2 ) NOT NULL DEFAULT  '0.00'");
	$configupgrade61 = mysql_query("ALTER TABLE  `orevalues` ADD  `ResonanceCalibrationMatrixWorth` DECIMAL( 10, 2 ) NOT NULL DEFAULT  '0.00'");
	$configupgrade62 = mysql_query("ALTER TABLE  `orevalues` ADD  `ThermoelectricCatalystsWorth` DECIMAL( 10, 2 ) NOT NULL DEFAULT  '0.00'");
	$configupgrade63 = mysql_query("ALTER TABLE  `orevalues` ADD  `FulleriteC28Worth` DECIMAL( 10, 2 ) NOT NULL DEFAULT  '0.00'");
	$configupgrade64 = mysql_query("ALTER TABLE  `orevalues` ADD  `FulleriteC32Worth` DECIMAL( 10, 2 ) NOT NULL DEFAULT  '0.00'");
	$configupgrade65 = mysql_query("ALTER TABLE  `orevalues` ADD  `FulleriteC50Worth` DECIMAL( 10, 2 ) NOT NULL DEFAULT  '0.00'");
	$configupgrade66 = mysql_query("ALTER TABLE  `orevalues` ADD  `FulleriteC60Worth` DECIMAL( 10, 2 ) NOT NULL DEFAULT  '0.00'");
	$configupgrade67 = mysql_query("ALTER TABLE  `orevalues` ADD  `FulleriteC70Worth` DECIMAL( 10, 2 ) NOT NULL DEFAULT  '0.00'");
	$configupgrade68 = mysql_query("ALTER TABLE  `orevalues` ADD  `FulleriteC72Worth` DECIMAL( 10, 2 ) NOT NULL DEFAULT  '0.00'");
	$configupgrade69 = mysql_query("ALTER TABLE  `orevalues` ADD  `FulleriteC84Worth` DECIMAL( 10, 2 ) NOT NULL DEFAULT  '0.00'");
	$configupgrade70 = mysql_query("ALTER TABLE  `orevalues` ADD  `FulleriteC320Worth` DECIMAL( 10, 2 ) NOT NULL DEFAULT  '0.00'");
	$configupgrade71 = mysql_query("ALTER TABLE  `orevalues` ADD  `FulleriteC540Worth` DECIMAL( 10, 2 ) NOT NULL DEFAULT  '0.00'");
	
	echo "Ugrading hauled Table!";
	echo "<br>";
	$configupgrade72 = mysql_query("ALTER TABLE  `hauled` ADD  `CondensedAlloy` INT(5) NOT NULL DEFAULT '0'");
	$configupgrade73 = mysql_query("ALTER TABLE  `hauled` ADD  `CrystalCompound` INT(5) NOT NULL DEFAULT '0'");
	$configupgrade74 = mysql_query("ALTER TABLE  `hauled` ADD  `PreciousAlloy` INT(5) NOT NULL DEFAULT '0'");
	$configupgrade75 = mysql_query("ALTER TABLE  `hauled` ADD  `SheenCompound` INT(5) NOT NULL DEFAULT '0'");
	$configupgrade76 = mysql_query("ALTER TABLE  `hauled` ADD  `GleamingAlloy` INT(5) NOT NULL DEFAULT '0'");
	$configupgrade77 = mysql_query("ALTER TABLE  `hauled` ADD  `LucentCompound` INT(5) NOT NULL DEFAULT '0'");
	$configupgrade78 = mysql_query("ALTER TABLE  `hauled` ADD  `DarkCompound` INT(5) NOT NULL DEFAULT '0'");
	$configupgrade79 = mysql_query("ALTER TABLE  `hauled` ADD  `MotleyCompound` INT(5) NOT NULL DEFAULT '0'");
	$configupgrade80 = mysql_query("ALTER TABLE  `hauled` ADD  `LusteringAlloy` INT(5) NOT NULL DEFAULT '0'");
	$configupgrade81 = mysql_query("ALTER TABLE  `hauled` ADD  `GlossyCompound` INT(5) NOT NULL DEFAULT '0'");
	$configupgrade82 = mysql_query("ALTER TABLE  `hauled` ADD  `PlushCompound` INT(5) NOT NULL DEFAULT '0'");
	$configupgrade83 = mysql_query("ALTER TABLE  `hauled` ADD  `OpulentCompound` INT(5) NOT NULL DEFAULT '0'");
	$configupgrade84 = mysql_query("ALTER TABLE  `hauled` ADD  `CartesianTemporalCoordinator` INT(5) NOT NULL DEFAULT '0'");
	$configupgrade85 = mysql_query("ALTER TABLE  `hauled` ADD  `CentralSystemController` INT(5) NOT NULL DEFAULT '0'");
	$configupgrade86 = mysql_query("ALTER TABLE  `hauled` ADD  `DefensiveControlNode` INT(5) NOT NULL DEFAULT '0'");
	$configupgrade87 = mysql_query("ALTER TABLE  `hauled` ADD  `ElectromechanicalHullSheeting` INT(5) NOT NULL DEFAULT '0'");
	$configupgrade88 = mysql_query("ALTER TABLE  `hauled` ADD  `EmergentCombatAnalyzer` INT(5) NOT NULL DEFAULT '0'");
	$configupgrade89 = mysql_query("ALTER TABLE  `hauled` ADD  `EmergentCombatIntelligence` INT(5) NOT NULL DEFAULT '0'");
	$configupgrade90 = mysql_query("ALTER TABLE  `hauled` ADD  `FusedNanomechanicalEngines` INT(5) NOT NULL DEFAULT '0'");
	$configupgrade91 = mysql_query("ALTER TABLE  `hauled` ADD  `HeuristicSelfassemblers` INT(5) NOT NULL DEFAULT '0'");
	$configupgrade92 = mysql_query("ALTER TABLE  `hauled` ADD  `JumpDriveControlNexus` INT(5) NOT NULL DEFAULT '0'");
	$configupgrade93 = mysql_query("ALTER TABLE  `hauled` ADD  `MeltedNanoribbons` INT(5) NOT NULL DEFAULT '0'");
	$configupgrade94 = mysql_query("ALTER TABLE  `hauled` ADD  `ModifiedFluidRouter` INT(5) NOT NULL DEFAULT '0'");
	$configupgrade95 = mysql_query("ALTER TABLE  `hauled` ADD  `NeurovisualInputMatrix` INT(5) NOT NULL DEFAULT '0'");
	$configupgrade96 = mysql_query("ALTER TABLE  `hauled` ADD  `PowderedC540Graphite` INT(5) NOT NULL DEFAULT '0'");
	$configupgrade97 = mysql_query("ALTER TABLE  `hauled` ADD  `ResonanceCalibrationMatrix` INT(5) NOT NULL DEFAULT '0'");
	$configupgrade98 = mysql_query("ALTER TABLE  `hauled` ADD  `ThermoelectricCatalysts` INT(5) NOT NULL DEFAULT '0'");
	$configupgrade99 = mysql_query("ALTER TABLE  `hauled` ADD  `FulleriteC28` INT(5) NOT NULL DEFAULT '0'");
	$configupgrade100 = mysql_query("ALTER TABLE  `hauled` ADD  `FulleriteC32` INT(5) NOT NULL DEFAULT '0'");
	$configupgrade101 = mysql_query("ALTER TABLE  `hauled` ADD  `FulleriteC50` INT(5) NOT NULL DEFAULT '0'");
	$configupgrade102 = mysql_query("ALTER TABLE  `hauled` ADD  `FulleriteC60` INT(5) NOT NULL DEFAULT '0'");
	$configupgrade103 = mysql_query("ALTER TABLE  `hauled` ADD  `FulleriteC70` INT(5) NOT NULL DEFAULT '0'");
	$configupgrade104 = mysql_query("ALTER TABLE  `hauled` ADD  `FulleriteC72` INT(5) NOT NULL DEFAULT '0'");
	$configupgrade105 = mysql_query("ALTER TABLE  `hauled` ADD  `FulleriteC84` INT(5) NOT NULL DEFAULT '0'");
	$configupgrade106 = mysql_query("ALTER TABLE  `hauled` ADD  `FulleriteC320` INT(5) NOT NULL DEFAULT '0'");
	$configupgrade107 = mysql_query("ALTER TABLE  `hauled` ADD  `FulleriteC540` INT(5) NOT NULL DEFAULT '0'");
	
	echo "Upgrading runs Table!";
	echo "<br>";
	$configupgrade108 = mysql_query("ALTER TABLE  `runs` ADD  `CondensedAlloy` INT(6) NOT NULL DEFAULT '0'");
	$configupgrade109 = mysql_query("ALTER TABLE  `runs` ADD  `CrystalCompound` INT(6) NOT NULL DEFAULT '0'");
	$configupgrade110 = mysql_query("ALTER TABLE  `runs` ADD  `PreciousAlloy` INT(6) NOT NULL DEFAULT '0'");
	$configupgrade111 = mysql_query("ALTER TABLE  `runs` ADD  `SheenCompound` INT(6) NOT NULL DEFAULT '0'");
	$configupgrade112 = mysql_query("ALTER TABLE  `runs` ADD  `GleamingAlloy` INT(6) NOT NULL DEFAULT '0'");
	$configupgrade113 = mysql_query("ALTER TABLE  `runs` ADD  `LucentCompound` INT(6) NOT NULL DEFAULT '0'");
	$configupgrade114 = mysql_query("ALTER TABLE  `runs` ADD  `DarkCompound` INT(6) NOT NULL DEFAULT '0'");
	$configupgrade115 = mysql_query("ALTER TABLE  `runs` ADD  `MotleyCompound` INT(6) NOT NULL DEFAULT '0'");
	$configupgrade116 = mysql_query("ALTER TABLE  `runs` ADD  `LusteringAlloy` INT(6) NOT NULL DEFAULT '0'");
	$configupgrade117 = mysql_query("ALTER TABLE  `runs` ADD  `GlossyCompound` INT(6) NOT NULL DEFAULT '0'");
	$configupgrade118 = mysql_query("ALTER TABLE  `runs` ADD  `PlushCompound` INT(6) NOT NULL DEFAULT '0'");
	$configupgrade119 = mysql_query("ALTER TABLE  `runs` ADD  `OpulentCompound` INT(6) NOT NULL DEFAULT '0'");
	$configupgrade120 = mysql_query("ALTER TABLE  `runs` ADD  `CartesianTemporalCoordinator` INT(6) NOT NULL DEFAULT '0'");
	$configupgrade121 = mysql_query("ALTER TABLE  `runs` ADD  `CentralSystemController` INT(6) NOT NULL DEFAULT '0'");
	$configupgrade122 = mysql_query("ALTER TABLE  `runs` ADD  `DefensiveControlNode` INT(6) NOT NULL DEFAULT '0'");
	$configupgrade123 = mysql_query("ALTER TABLE  `runs` ADD  `ElectromechanicalHullSheeting` INT(6) NOT NULL DEFAULT '0'");
	$configupgrade124 = mysql_query("ALTER TABLE  `runs` ADD  `EmergentCombatAnalyzer` INT(6) NOT NULL DEFAULT '0'");
	$configupgrade125 = mysql_query("ALTER TABLE  `runs` ADD  `EmergentCombatIntelligence` INT(6) NOT NULL DEFAULT '0'");
	$configupgrade126 = mysql_query("ALTER TABLE  `runs` ADD  `FusedNanomechanicalEngines` INT(6) NOT NULL DEFAULT '0'");
	$configupgrade127 = mysql_query("ALTER TABLE  `runs` ADD  `HeuristicSelfassemblers` INT(6) NOT NULL DEFAULT '0'");
	$configupgrade128 = mysql_query("ALTER TABLE  `runs` ADD  `JumpDriveControlNexus` INT(6) NOT NULL DEFAULT '0'");
	$configupgrade129 = mysql_query("ALTER TABLE  `runs` ADD  `MeltedNanoribbons` INT(6) NOT NULL DEFAULT '0'");
	$configupgrade130 = mysql_query("ALTER TABLE  `runs` ADD  `ModifiedFluidRouter` INT(6) NOT NULL DEFAULT '0'");
	$configupgrade131 = mysql_query("ALTER TABLE  `runs` ADD  `NeurovisualInputMatrix` INT(6) NOT NULL DEFAULT '0'");
	$configupgrade132 = mysql_query("ALTER TABLE  `runs` ADD  `PowderedC540Graphite` INT(6) NOT NULL DEFAULT '0'");
	$configupgrade133 = mysql_query("ALTER TABLE  `runs` ADD  `ResonanceCalibrationMatrix` INT(6) NOT NULL DEFAULT '0'");
	$configupgrade134 = mysql_query("ALTER TABLE  `runs` ADD  `ThermoelectricCatalysts` INT(6) NOT NULL DEFAULT '0'");
	$configupgrade135 = mysql_query("ALTER TABLE  `runs` ADD  `FulleriteC28` INT(6) NOT NULL DEFAULT '0'");
	$configupgrade136 = mysql_query("ALTER TABLE  `runs` ADD  `FulleriteC32` INT(6) NOT NULL DEFAULT '0'");
	$configupgrade137 = mysql_query("ALTER TABLE  `runs` ADD  `FulleriteC50` INT(6) NOT NULL DEFAULT '0'");
	$configupgrade138 = mysql_query("ALTER TABLE  `runs` ADD  `FulleriteC60` INT(6) NOT NULL DEFAULT '0'");
	$configupgrade139 = mysql_query("ALTER TABLE  `runs` ADD  `FulleriteC70` INT(6) NOT NULL DEFAULT '0'");
	$configupgrade140 = mysql_query("ALTER TABLE  `runs` ADD  `FulleriteC72` INT(6) NOT NULL DEFAULT '0'");
	$configupgrade141 = mysql_query("ALTER TABLE  `runs` ADD  `FulleriteC84` INT(6) NOT NULL DEFAULT '0'");
	$configupgrade142 = mysql_query("ALTER TABLE  `runs` ADD  `FulleriteC320` INT(6) NOT NULL DEFAULT '0'");
	$configupgrade143 = mysql_query("ALTER TABLE  `runs` ADD  `FulleriteC540` INT(6) NOT NULL DEFAULT '0'");
	
	echo "Updating runs Table!";
	echo "<br>";
	$configupgrade144 = mysql_query("ALTER TABLE  `runs` ADD  `CondensedAlloyWanted` INT(6) NOT NULL DEFAULT '0'");
	$configupgrade145 = mysql_query("ALTER TABLE  `runs` ADD  `CrystalCompoundWanted` INT(6) NOT NULL DEFAULT '0'");
	$configupgrade146 = mysql_query("ALTER TABLE  `runs` ADD  `PreciousAlloyWanted` INT(6) NOT NULL DEFAULT '0'");
	$configupgrade147 = mysql_query("ALTER TABLE  `runs` ADD  `SheenCompoundWanted` INT(6) NOT NULL DEFAULT '0'");
	$configupgrade148 = mysql_query("ALTER TABLE  `runs` ADD  `GleamingAlloyWanted` INT(6) NOT NULL DEFAULT '0'");
	$configupgrade149 = mysql_query("ALTER TABLE  `runs` ADD  `LucentCompoundWanted` INT(6) NOT NULL DEFAULT '0'");
	$configupgrade150 = mysql_query("ALTER TABLE  `runs` ADD  `DarkCompoundWanted` INT(6) NOT NULL DEFAULT '0'");
	$configupgrade151 = mysql_query("ALTER TABLE  `runs` ADD  `MotleyCompoundWanted` INT(6) NOT NULL DEFAULT '0'");
	$configupgrade152 = mysql_query("ALTER TABLE  `runs` ADD  `LusteringAlloyWanted` INT(6) NOT NULL DEFAULT '0'");
	$configupgrade153 = mysql_query("ALTER TABLE  `runs` ADD  `GlossyCompoundWanted` INT(6) NOT NULL DEFAULT '0'");
	$configupgrade154 = mysql_query("ALTER TABLE  `runs` ADD  `PlushCompoundWanted` INT(6) NOT NULL DEFAULT '0'");
	$configupgrade155 = mysql_query("ALTER TABLE  `runs` ADD  `OpulentCompoundWanted` INT(6) NOT NULL DEFAULT '0'");
	$configupgrade156 = mysql_query("ALTER TABLE  `runs` ADD  `CartesianTemporalCoordinatorWanted` INT(6) NOT NULL DEFAULT '0'");
	$configupgrade157 = mysql_query("ALTER TABLE  `runs` ADD  `CentralSystemControllerWanted` INT(6) NOT NULL DEFAULT '0'");
	$configupgrade158 = mysql_query("ALTER TABLE  `runs` ADD  `DefensiveControlNodeWanted` INT(6) NOT NULL DEFAULT '0'");
	$configupgrade159 = mysql_query("ALTER TABLE  `runs` ADD  `ElectromechanicalHullSheetingWanted` INT(6) NOT NULL DEFAULT '0'");
	$configupgrade160 = mysql_query("ALTER TABLE  `runs` ADD  `EmergentCombatAnalyzerWanted` INT(6) NOT NULL DEFAULT '0'");
	$configupgrade161 = mysql_query("ALTER TABLE  `runs` ADD  `EmergentCombatIntelligenceWanted` INT(6) NOT NULL DEFAULT '0'");
	$configupgrade162 = mysql_query("ALTER TABLE  `runs` ADD  `FusedNanomechanicalEnginesWanted` INT(6) NOT NULL DEFAULT '0'");
	$configupgrade163 = mysql_query("ALTER TABLE  `runs` ADD  `HeuristicSelfassemblersWanted` INT(6) NOT NULL DEFAULT '0'");
	$configupgrade164 = mysql_query("ALTER TABLE  `runs` ADD  `JumpDriveControlNexusWanted` INT(6) NOT NULL DEFAULT '0'");
	$configupgrade165 = mysql_query("ALTER TABLE  `runs` ADD  `MeltedNanoribbonsWanted` INT(6) NOT NULL DEFAULT '0'");
	$configupgrade166 = mysql_query("ALTER TABLE  `runs` ADD  `ModifiedFluidRouterWanted` INT(6) NOT NULL DEFAULT '0'");
	$configupgrade167 = mysql_query("ALTER TABLE  `runs` ADD  `NeurovisualInputMatrixWanted` INT(6) NOT NULL DEFAULT '0'");
	$configupgrade168 = mysql_query("ALTER TABLE  `runs` ADD  `PowderedC540GraphiteWanted` INT(6) NOT NULL DEFAULT '0'");
	$configupgrade169 = mysql_query("ALTER TABLE  `runs` ADD  `ResonanceCalibrationMatrixWanted` INT(6) NOT NULL DEFAULT '0'");
	$configupgrade170 = mysql_query("ALTER TABLE  `runs` ADD  `ThermoelectricCatalystsWanted` INT(6) NOT NULL DEFAULT '0'");
	$configupgrade171 = mysql_query("ALTER TABLE  `runs` ADD  `FulleriteC28Wanted` INT(6) NOT NULL DEFAULT '0'");
	$configupgrade172 = mysql_query("ALTER TABLE  `runs` ADD  `FulleriteC32Wanted` INT(6) NOT NULL DEFAULT '0'");
	$configupgrade173 = mysql_query("ALTER TABLE  `runs` ADD  `FulleriteC50Wanted` INT(6) NOT NULL DEFAULT '0'");
	$configupgrade174 = mysql_query("ALTER TABLE  `runs` ADD  `FulleriteC60Wanted` INT(6) NOT NULL DEFAULT '0'");
	$configupgrade175 = mysql_query("ALTER TABLE  `runs` ADD  `FulleriteC70Wanted` INT(6) NOT NULL DEFAULT '0'");
	$configupgrade176 = mysql_query("ALTER TABLE  `runs` ADD  `FulleriteC72Wanted` INT(6) NOT NULL DEFAULT '0'");
	$configupgrade177 = mysql_query("ALTER TABLE  `runs` ADD  `FulleriteC84Wanted` INT(6) NOT NULL DEFAULT '0'");
	$configupgrade178 = mysql_query("ALTER TABLE  `runs` ADD  `FulleriteC320Wanted` INT(6) NOT NULL DEFAULT '0'");
	$configupgrade179 = mysql_query("ALTER TABLE  `runs` ADD  `FulleriteC540Wanted` INT(6) NOT NULL DEFAULT '0'");
	
	echo "Updating the config version number!";
	echo "<br>";
	$configupgrade180 = mysql_query("UPDATE config SET value='19' WHERE name='version'");
	
	echo "Upgrade Completed!";
	echo "<br>";
	echo "<a href=http://".$site.">Click here to Login</a>";
	
}else{

?>
<center>
This is the Mining Buddy SQL upgrade page.<br>
When you are ready to upgrade you Mining Buddy Install to the newest version click the link below<br>
<a href="mysql-update-18-19.php?upgrade=1">Upgrade Now</a>
<?
}
?>