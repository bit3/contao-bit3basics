<?php

/**
 * bit3 basic settings
 *
 * @author     Tristan Lins <tristan.lins@bit3.de>
 * @link       http://bit3.de
 * @license    CC-BY 3.0
 * @filesource
 */

array_unshift($GLOBALS['TL_DCA']['tl_files']['fields']['name']['save_callback'], array('Bit3\Contao\Basics\Hooks', 'normalizeName'));
