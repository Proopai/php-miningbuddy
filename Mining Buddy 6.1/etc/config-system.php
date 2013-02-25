<?PHP


/* 
 * MiningBuddy (http://miningbuddy.net)  
 * $Header: /usr/home/mining/cvs/mining/etc/config-system.php,v 1.116 2008/05/01 15:37:24 mining Exp $
 *
 * Copyright (c) 2005-2008 Christian Reiss.
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms,
 * with or without modification, are permitted provided
 * that the following conditions are met:
 *
 * - Redistributions of source code must retain the above copyright notice,
 *   this list of conditions and the following disclaimer.
 * - Redistributions in binary form must reproduce the above copyright
 *   notice, this list of conditions and the following disclaimer in the
 *   documentation and/or other materials provided with the distribution.
 *
 *  THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 *  "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 *  LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS
 *  FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 *  OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 *  SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED
 *  TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA,
 *  OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY
 *  OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING
 *  NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
 *  SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 */

/*
 * DO NOT EDIT ANYTHING -A N Y T H I N G- in this file.
 * Doing so will not only kill a kitten, drown puppies,
 * increase lag in eve, abduct santa and tickle Parrowdox,
 * no, it will also most assuredly break your MiningBuddy 
 * installation.
 */

$VERSION_COMP = "0.6.1";
$VERSION = "MiningBuddy " . $VERSION_COMP;

$DSN = "$mysql_protocol://$mysql_username:$mysql_password@$mysql_hostname/$mysql_dbname";
$ORENAMES = array (
		// Standard ore
	"Arkonor",
	"Crimson arkonor",
	"Prime arkonor",
	"Bistot",
	"Triclinic bistot",
	"Monoclinic bistot",
	"Crokite",
	"Sharp crokite",
	"Crystalline crokite",
	"Dark Ochre",
	"Onyx ochre",
	"Obsidian ochre",
	"Gneiss",
	"Iridescent gneiss",
	"Prismatic gneiss",
	"Hedbergite",
	"Glazed hedbergite",
	"Hemorphite",
	"Vitric hedbergite",
	"Vivid hemorphite",
	"Radiant hemorphite",
	"Jaspet",
	"Pure jaspet",
	"Pristine jaspet",
	"Kernite",
	"Luminous kernite",
	"Fiery kernite",
	"Mercoxit",
	"Magma mercoxit",
	"Vitreous mercoxit",
	"Omber",
	"Silvery omber",
	"Golden omber",
	"Bright Spodumain",
	"Spodumain",
	"Gleaming spodumain",
	"Plagioclase",
	"Azure plagioclase",
	"Rich plagioclase",
	"Pyroxeres",
	"Solid pyroxeres",
	"Viscous pyroxeres",
	"Scordite",
	"Condensed scordite",
	"Massive scordite",
	"Veldspar",
	"Concentrated veldspar",
	"Dense veldspar",

		// Ice
	"Blue ice",
	"Clear icicle",
	"Dark glitter",
	"Enriched clear icicle",
	"Gelidus",
	"Glacial mass",
	"Glare crust",
	"Krystallos",
	"Pristine white glaze",
	"Smooth glacial mass",
	"Thick blue ice",
	"White glaze"
);

$SHIPTYPES = array (
	"Assault Ship",
	"Battlecruiser",
	"Battleship",
	"Carrier",
	"Command Ship",
	"Covert Ops",
	"Cruiser",
	"Destroyer",
	"Dreadnought",
	"Exhumer",
	"Freighter",
	"Frigate",
	"Heavy Assault Ship",
	"Industrial Ship",
	"Interceptor",
	"Interdictor",
	"Logistic",
	"Mining Barge",
	"Recon Ship",
	"Shuttle",
	"Transport Ship"
);

$SHIPTYPES[99] = "unclassified";
foreach ($ORENAMES as $ore) {
	$dbfriendly = str_replace(" ", "", ucwords($ore));
	if (!empty ($ORENAME_STR)) {
		$ORENAME_STR .= ", " . $dbfriendly;
	} else {
		$ORENAME_STR = $dbfriendly;
	}
	$DBORE[$ore] = $dbfriendly;
}

$SQLVER = "13";
$CONFIGVER = "9";
$IS_BETA = false;
?>