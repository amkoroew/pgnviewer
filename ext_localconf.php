<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'MFG.' . $_EXTKEY,
	'Pgnviewer',
	array(
		'Pgnviewer' => 'list,show'
	),
	// non-cacheable actions
	array(
		
	)
);

?>
