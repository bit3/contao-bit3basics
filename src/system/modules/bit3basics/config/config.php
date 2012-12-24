<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * InfinitySoft Base Extension
 *
 * InfinitySoft Base Extension von InfinitySoft, Tristan Lins steht unter einer Creative Commons Namensnennung 3.0 Unported Lizenz.
 *
 * PHP version 5
 * @copyright  InfinitySoft 2012
 * @author     Tristan Lins <tristan.lins@infinitysoft.de>
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

// URL settings
$GLOBALS['TL_CONFIG']['rewriteURL']    = true;
$GLOBALS['TL_CONFIG']['folderAlias']   = true;
$GLOBALS['TL_CONFIG']['languageAlias'] = 'none';

// Upload settings
$GLOBALS['TL_CONFIG']['maxFileSize'] = 204800000;
$GLOBALS['TL_CONFIG']['imageWidth']  = 3000;
$GLOBALS['TL_CONFIG']['imageHeight'] = 3000;

// Image processing settings
$GLOBALS['TL_CONFIG']['gdMaxImgWidth']  = PHP_INT_MAX;
$GLOBALS['TL_CONFIG']['gdMaxImgHeight'] = PHP_INT_MAX;

// MagickImages settings
$GLOBALS['TL_CONFIG']['magickimages_unsharp_mask'] = true;
$GLOBALS['TL_CONFIG']['magickimages_force']        = true;
$GLOBALS['TL_CONFIG']['magickimages_optipng']      = true;
$GLOBALS['TL_CONFIG']['magickimages_advpng']       = true;

// Theme+ settings
$GLOBALS['TL_CONFIG']['default_css_minimizer']   = 'yui';
$GLOBALS['TL_CONFIG']['default_js_minimizer']    = 'yui';
$GLOBALS['TL_CONFIG']['theme_plus_lesscss_mode'] = 'phpless';
$GLOBALS['TL_CONFIG']['gzipScripts']             = true;

// Redirect4ward settings
$GLOBALS['TL_CONFIG']['redirect4wardKillQueryStr']  = true;
$GLOBALS['TL_CONFIG']['redirect4ward_use_htaccess'] = true;

// htaccess configuration
$GLOBALS['TL_HTACCESS_DEFAULTS']['infinitysoft'] = array_merge(
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
