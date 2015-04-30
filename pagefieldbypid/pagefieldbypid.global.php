<?php
/* ====================
[BEGIN_COT_EXT]
Hooks=global
[END_COT_EXT]
==================== */
defined('COT_CODE') or die('Wrong URL');

require_once cot_incfile('page', 'module');

/**
 * Returns parsed (if need) field (as example is page_text) for a given page
 * @param int|string $pid ID or alias of page
 * @param string $pfield Field name for page
 * @return string
 */
function pagefieldbypid($pid, $pfield = 'text')
{
	global $db, $db_pages, $cfg, $last_pagefield;

	$last_pagefield = array();

	if ($cache && $cache->disk->exists($pid.'-'.$pfield, 'pagefieldbypid'))
	{
		$last_pagefield = $cache->disk->get($pid.'-'.$pfield, 'pagefieldbypid');

		return $last_pagefield[$pfield];
	}
	else
	{
		$res = (is_numeric($pid)) ? $db->query("SELECT * FROM $db_pages WHERE page_id = ?", array((int) $pid)) : $db->query("SELECT * FROM $db_pages WHERE page_alias = ?", array((string) $pid));

		if ($res->rowCount() > 0)
		{
			$last_pagefield = cot_generate_pagetags($res->fetch(), '', 0, $usr['isadmin']);

			if ($cache) $cache->disk->store($pid.'-'.$pfield, $last_pagefield, 'pagefieldbypid');

			$pfield = ($pfield != 'text' && $db->fieldExists($db_pages, 'page_'.$pfield)) ? strtoupper($pfield) : ($pfield != 'text' ? false : strtoupper($pfield));

			return $pfield ? $last_pagefield[$pfield] : 'Err. Unknown field '.$pfield;
		}
		else
		{
			return false;
		}
	}
}
