<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

$tempColumns = array(
	'tx_almiconfields_icon' => array(
    	'exclude' => 0,
        'label' => 'LLL:EXT:alm_iconfields/Resources/Private/Language/locallang_db.xlf:tx_almiconfields_icon',
        'config' => array(
        	/*
        	after V7 not working with input type
        	'type' => 'input',
        	'size' => '20',
        	*/
        	'type' => 'text',
        	'rows' => '1',
            'cols' => '20',
        	'max' => '255',
        	'eval' => 'trim',
        	'wizards' => array(
				'_VERTICAL' => 0,
                '_DISTANCE' => 10,
				'iconPicker' => array(
					'type' => 'popup',
					'title' => 'IconPicker',
                    'module' => array(
                    	'name' => 'wizard_iconpicker',
                    ),
                    'icon' => 'EXT:alm_iconpicker/Resources/Public/Icons/wizard.gif',
                    'JSopenParams' => 'height=750,width=430,status=0,menubar=0,scrollbars=0',
                    'params' => array()
				)
            )
        )
    ),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('pages', $tempColumns, 1);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('pages', 'tx_almiconfields_icon', '1,3,4', 'after:subtitle');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $tempColumns, 1);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tt_content', 'tx_almiconfields_icon', '', 'after:header_position');
