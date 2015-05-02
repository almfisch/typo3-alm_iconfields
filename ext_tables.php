<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

$tempColumns = array(
	'tx_almiconfields_icon' => array(
    	'exclude' => 0,
        'label' => 'LLL:EXT:alm_iconfields/Resources/Private/Language/locallang_db.xlf:tx_almiconfields_icon',
        'config' => array(
        	'type' => 'input',
        	'size' => '20',
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
                    'JSopenParams' => 'height=720,width=430,status=0,menubar=0,scrollbars=0',
                    'params' => array()
				)
            )
        )
    ),
);

t3lib_div::loadTCA('pages');
t3lib_extMgm::addTCAcolumns('pages', $tempColumns, 1);
t3lib_extMgm::addToAllTCAtypes('pages', 'tx_almiconfields_icon', '1,3,4', 'after:subtitle');

t3lib_div::loadTCA('tt_content');
t3lib_extMgm::addTCAcolumns('tt_content', $tempColumns, 1);
t3lib_extMgm::addToAllTCAtypes('tt_content', 'tx_almiconfields_icon', 'header,text,textpic,image', 'after:header_position');
