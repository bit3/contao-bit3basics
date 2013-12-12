<?php

/**
 * bit3 basic settings
 *
 * @author     Tristan Lins <tristan.lins@bit3.de>
 * @link       http://bit3.de
 * @license    CC-BY 3.0
 * @filesource
 */

// Database settings
$GLOBALS['TL_CONFIG']['dbPconnect'] = true;
$GLOBALS['TL_CONFIG']['dbCharset']  = 'UTF8';

// Localisation settings
$GLOBALS['TL_CONFIG']['dateFormat']  = 'd.m.Y';
$GLOBALS['TL_CONFIG']['datimFormat'] = 'd.m.Y H:i';
$GLOBALS['TL_CONFIG']['timeZone']    = 'Europe/Berlin';

// Global settings
$GLOBALS['TL_CONFIG']['minifyMarkup'] = true;

// Frontend settings
$GLOBALS['TL_CONFIG']['rewriteURL']       = true;
$GLOBALS['TL_CONFIG']['useAutoItem']      = true;
$GLOBALS['TL_CONFIG']['addLanguageToUrl'] = true;
$GLOBALS['TL_CONFIG']['folderUrl']        = true;

// File and image settings
$GLOBALS['TL_CONFIG']['gdMaxImgWidth']  = PHP_INT_MAX;
$GLOBALS['TL_CONFIG']['gdMaxImgHeight'] = PHP_INT_MAX;

// Upload settings
$GLOBALS['TL_CONFIG']['maxFileSize'] = 204800000; // 200M
$GLOBALS['TL_CONFIG']['imageWidth']  = 3000;
$GLOBALS['TL_CONFIG']['imageHeight'] = 3000;

// MagickImages settings
$GLOBALS['TL_CONFIG']['magickimages_unsharp_mask'] = true;
$GLOBALS['TL_CONFIG']['magickimages_force']        = true;
$GLOBALS['TL_CONFIG']['magickimages_optipng']      = true;
$GLOBALS['TL_CONFIG']['magickimages_advpng']       = true;

// Redirect4ward settings
$GLOBALS['TL_CONFIG']['redirect4wardKillQueryStr']  = true;
$GLOBALS['TL_CONFIG']['redirect4ward_use_htaccess'] = true;

// WebsiteBuilder settings
$GLOBALS['TL_CONFIG']['website_builder_datasets'] = 'a:1:{i:0;s:71:"https://raw.github.com/bit3/contao-website-builder-set/master/baseset.xml";}';

// htaccess configuration
if (isset($GLOBALS['TL_HTACCESS_DEFAULTS']['html5boilerplate']) &&
	is_array($GLOBALS['TL_HTACCESS_DEFAULTS']['html5boilerplate'])
) {
	$GLOBALS['TL_HTACCESS_DEFAULTS']['bit3'] = array_merge(
		$GLOBALS['TL_HTACCESS_DEFAULTS']['html5boilerplate'],
		array
		(
			/* rewrite config */
			// 'htaccess_rewrite_rules' => '',
			'htaccess_rewrite_prepend_www'     => true,
			'htaccess_rewrite_remove_www'      => true,
			'htaccess_rewrite_gzip'            => true,
			'htaccess_rewrite_suffix'          => '',
			/* h5bp settings */
			'htaccess_h5bp_ie_x_ua_compatible' => true,
			'htaccess_h5bp_ie_flicker_fix'     => true
		)
	);
}

// Hooks
$GLOBALS['TL_HOOKS']['loadDataContainer'][] = array('Bit3\Basics\Hooks', 'loadDataContainer');
