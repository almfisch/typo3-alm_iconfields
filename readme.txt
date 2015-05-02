IconFields for page & tt_content

- content-types with iconfield (table tt_content): header,text,textpic,image
- page-types with iconfield (table pages): 1,3,4
- requires ext: alm_iconpicker
- path to iconfonts for the wizard must be configured in typo3conf/extTables.php (see example)




Example: extTables.php (in 'typo3conf'):


<?php

$icons = array(
	'font_1' => array(
    	'iconFontName' => 'Font Awesome',
        'iconFont' => 'fileadmin/templates/font_awesome/css/font-awesome.min.css',
        'iconList' => 'fileadmin/templates/font_awesome/iconlist.txt'
    ),
    'font_2' => array(
    	'iconFontName' => 'Font Ownsome',
        'iconFont' => 'fileadmin/templates/font_ownsome/font_ownsome.css',
        'iconList' => 'fileadmin/templates/font_ownsome/iconlist.txt'
    )
);

$TCA['pages']['columns']['tx_almiconfields_icon']['config']['wizards']['iconPicker']['params'] = $icons;
$TCA['tt_content']['columns']['tx_almiconfields_icon']['config']['wizards']['iconPicker']['params'] = $icons;

?>




Example: icon before text/imgtext (tt_content)


temp.icon = TEXT
temp.icon.field = tx_almiconfields_icon
temp.icon.required = 1
temp.icon.htmlSpecialChars = 0
temp.icon.wrap = <div class="icon_wrapper"><i class="|"></i></div>

tt_content.text.5 < temp.icon
tt_content.textpic.10.5 < temp.icon




Example: Icon in navigation

page.10.variables.NAVI_MAIN.1.NO.stdWrap.dataWrap.if.isTrue.field = tx_almiconfields_icon
page.10.variables.NAVI_MAIN.1.NO.stdWrap.dataWrap = <i class="{field:tx_almiconfields_icon}"></i>|

or with space:

page.10.variables.NAVI_MAIN.1.NO.stdWrap.noTrimWrap.if.isTrue.field = tx_almiconfields_icon
page.10.variables.NAVI_MAIN.1.NO.stdWrap.noTrimWrap = ^<i class="{field:tx_almiconfields_icon}"></i> ^^
page.10.variables.NAVI_MAIN.1.NO.stdWrap.noTrimWrap.splitChar = ^
page.10.variables.NAVI_MAIN.1.NO.stdWrap.insertData = 1