<?php


/*
 * MiningBuddy (http://miningbuddy.net)
 * $Header: /usr/home/mining/cvs/mining/functions/math/calcPayoutPercent.php,v 1.14 2008/01/02 20:01:33 mining Exp $
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
 * This is a scary little bit*h. 
 * Because it has to do with math.
 * Math is evil.
 * No one likes math.
 */

function calcPayoutPercent($run, $pilot) {

	// Sanity check.
	numericCheck($run, 0);
	numericCheck($pilot, 0);

	// Globals.
	global $DB;
	global $TIMEMARK;

	// Lets get the total jointime.
	$joinTimes = $DB->query("SELECT * FROM joinups WHERE userid='$pilot' AND run='$run'");

	// We got any results? If not, that pilot never attended!
	if ($joinTimes->numRows() == 0) {
		return (0);
	}

	// Assemble the time.
	while ($joinTime = $joinTimes->fetchRow()) {
		// Joinup time.
		$joinup = $joinTime[joined];

		// Part time., handle still-active folks.
		if ($joinTime[parted]) {
			// Pilot left.
			$left = $joinTime[parted];
		} else {
			// Pilot still active: Set current time as part-time.
			$left = $TIMEMARK;
		}

		// Add his active seconds to a batch.
		$totalSeconds = $totalSeconds + ($left - $joinup);
	}

	// Get the run's start and endtime.
	$Run_DS = $DB->query("SELECT starttime, endtime FROM runs WHERE id='$run' LIMIT 1");
	$Run = $Run_DS->fetchRow();

	// Endtime, handle still-open cases.
	$run_starttime = $Run[starttime];
	if ($Run[endtime] > 0) {
		$run_endtime = $Run[endtime];
	} else {
		$run_endtime = $TIMEMARK;
	}

	// runSeconds is the total number of seconds the run is open.
	$runSeconds = $run_endtime - $run_starttime;
	$timePercent = 100 / ($runSeconds / $totalSeconds);

	// How many people joined this run?
	$totalPilots = $DB->getCol("SELECT COUNT(DISTINCT userid) FROM joinups AS count WHERE run='$run'");
	$totalPilots = $totalPilots[0];

	$myPart = (100 / $totalPilots) * ($timePercent / 100);

	// Return the Percentage.
	return ($myPart);
}
?>