<?php
defined('TYPO3_MODE') or die('Access denied.');

$configuration = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(
    \TYPO3\CMS\Core\Configuration\ExtensionConfiguration::class
)->get('ameos_tarteaucitron');


if($configuration['xclass_youtube'] == '1'){
	$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][\TYPO3\CMS\Core\Resource\Rendering\YouTubeRenderer::class] = array(
	    'className' => \Ameos\AmeosTarteaucitron\Xclasses\TYPO3\CMS\Core\Resource\Rendering\YouTubeRenderer::class,
	);
}

if($configuration['xclass_vimeo'] == '1'){
	$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][\TYPO3\CMS\Core\Resource\Rendering\VimeoRenderer::class] = array(
	    'className' => \Ameos\AmeosTarteaucitron\Xclasses\TYPO3\CMS\Core\Resource\Rendering\VimeoRenderer::class,
	);
}