<?php
defined('TYPO3_MODE') or die();

$lightboxStyle = [
       'lightboxstyle' => [
           'exclude' => true,
           'label' => 'LLL:EXT:t3up_image/Resources/Private/Language/locallang_backend.xlf:lightboxstyle',
           'config' => [
               'type' => 'select',
               'renderType' => 'selectSingle',
               'items' => [
                   ['LLL:EXT:t3up_image/Resources/Private/Language/locallang_backend.xlf:lightboxstyle0', ''],
                   ['LLL:EXT:t3up_image/Resources/Private/Language/locallang_backend.xlf:lightboxstyle1', 'a'],
                   ['LLL:EXT:t3up_image/Resources/Private/Language/locallang_backend.xlf:lightboxstyle2', 'b'],
                   ['LLL:EXT:t3up_image/Resources/Private/Language/locallang_backend.xlf:lightboxstyle3', 'c'],
                   ['LLL:EXT:t3up_image/Resources/Private/Language/locallang_backend.xlf:lightboxstyle4', 'd'],
                   ['LLL:EXT:t3up_image/Resources/Private/Language/locallang_backend.xlf:lightboxstyle5', 'e'],
                   ],
               'default' => 'b'
           ]
       ],
];



/*********************************************************************************************************/
// Felder der allgemeinen Datensatzbeschreibung hinzufügen - noch keine Ausgabe im Backend!
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
        'tt_content',
        $lightboxStyle
);

/*********************************************************************************************************/
// Felder der neuen Palette hinzufügen
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
 'tt_content',
 'lightboxstyle_fields',
 'lightboxstyle'
);


/*********************************************************************************************************/
// Neue Palette dem Tag hinzufügen, nach dem Titel - Dadurch Anzeige im Backend
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
'tt_content','--palette--;LLL:EXT:t3up_image/Resources/Private/Language/locallang_backend.xlf:sorting;lightboxstyle_fields', 'textpic,textmedia,image', 'after:image_zoom');



