<?php


/*
 * MiningBuddy (http://miningbuddy.net)
 * $Header: /usr/home/mining/cvs/mining/functions/runs/listRun_inc_step1.php,v 1.13 2008/01/12 15:53:12 mining Exp $
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
 * Inside:
 * Database business ONLY
 */

// We have to select the most fitting ID. This can be done in three ways.
if (("$_GET[id]" >= 0) && (is_numeric($_GET[id]))) {
	// Way Nr. 1: The user specified an ID.
	$ID = $_GET[id];
} else {
	// Way Nr. 2: The user is in a Mining run, but has not given us an ID. Use the joined MiningOP ID.		
	$ID = userInRun($userID, "check");
	if (!$ID) {
		// Way Nr. 2: The user is not in a run and has not given us an ID. Select the most up to date, not-yet-closed OP.			
		$results = $DB->query("select * from runs where endtime is NULL order by id desc limit 1");
		if (($results->numRows()) == "0") {
			// Total failure: No operations in Database!				
			MakeNotice("There are no mining operations in the database! You have to create an operation prior to join.", "warning", "Not joined");
		}
		$getid = $results->fetchRow();
		$ID = $getid[run];
	}
}

// Now lets fetch the Dataset.
$results = $DB->query("SELECT * from runs where id = '$ID' limit 1");

// And check that we actually suceeded.
if ($results->numRows() != 1) {
	makeNotice("Internal error: Could not load dataset from Database.", "error", "Internal Error!");
} else {
	$row = $results->fetchRow();
}

// Now that we have the run loaded in RAM, we can load several other things.
$joinlog = $DB->query("select * from joinups where run = '$ID' order by ID DESC");
$activelog = $DB->query("select * from joinups where run = '$ID' and parted is NULL");
if ($row[oreGlue] <= 0) {
	$values = $DB->query("select * from orevalues order by id desc limit 1");
} else {
	$values = $DB->query("select * from orevalues where id='" . $row[oreGlue] . "' limit 1");
}

//Edit Starts Here
if ($row[shipGlue] <= 0) {
	$svalues = $DB->query("select * from shipvalues order by id desc limit 1");
} else {
	$svalues = $DB->query("select * from shipvalues where id='" . $row[shipGlue] . "' limit 1");
}
//Edit Ends Here

// Load cargo container database.
if (getConfig("cargocontainer")) {
	$CansDS = $DB->query("SELECT id, location, droptime, name, pilot, isFull, miningrun FROM cans WHERE miningrun='$ID' ORDER BY droptime ASC");
}

// note: hauling DB queries have been move into the according step-file
?>