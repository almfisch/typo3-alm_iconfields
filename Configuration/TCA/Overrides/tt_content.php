<?php
defined('TYPO3_MODE') || die();

$tempColumns = array(
	'tx_almiconfields_icon' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:alm_iconfields/Resources/Private/Language/locallang_db.xlf:tx_almiconfields_icon',
		'config' => array(
			'type' => 'input',
			'size' => '20',
			'max' => '255',
			'eval' => 'trim',
			'fieldControl' => array(
				'iconpickerController' => array(
					'renderType' => 'iconpickerController'
				),
			),
		)
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $tempColumns);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tt_content', 'tx_almiconfields_icon', '', 'after:header_position');
