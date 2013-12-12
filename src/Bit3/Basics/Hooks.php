<?php

/**
 * bit3 basic settings
 *
 * @author     Tristan Lins <tristan.lins@bit3.de>
 * @link       http://bit3.de
 * @license    CC-BY 3.0
 * @filesource
 */

namespace Bit3\Basics;

class Hooks {
	public function normalizeName($name)
	{
		return standardize($name);
	}

	public function loadDataContainer($tableName)
	{
		if ($tableName == 'tl_files' && $_FILES) {
			$this->normalizeUploadNames();
		}
	}

	public function normalizeUploadNames()
	{
		if (is_array($_FILES['files'])) {
			$count = count($_FILES['files']['name']);
			for ($i=0; $i<$count; $i++) {
				$pathinfo = pathinfo($_FILES['files']['name'][$i]);
				$_FILES['files']['name'][$i] = standardize($pathinfo['filename']) . '.' . $pathinfo['extension'];
			}
		}
	}
}
