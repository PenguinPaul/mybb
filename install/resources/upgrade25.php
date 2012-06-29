<?php
/**
 * MyBB 1.6
 * Copyright 2010 MyBB Group, All Rights Reserved
 *
 * Website: http://www.mybboard.com
 * License: http://mybb.com/about/license
 *
 * $Id$
 */

/**
 * Upgrade Script: 1.6.8
 */

$upgrade_detail = array(
	"revert_all_templates" => 0,
	"revert_all_themes" => 0,
	"revert_all_settings" => 0
);

@set_time_limit(0);

function upgrade25_dbchanges()
{
	global $db, $output;

	$output->print_header("Updating Help Documents");
	echo "<p>Performing necessary upgrade queries...</p>";

	$db->update_query("helpdocs", array('usetranslation' => 1));
	$db->update_query("helpsections", array('usetranslation' => 1));

	$output->print_contents("<p>Click next to continue with the upgrade process.</p>");
	$output->print_footer("25_done");
}
?>