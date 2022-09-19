<?php

/****************************************************************
 * Extension Manager/Repository config file for ext "t3up_image".
 ***************************************************************/

/** @var string $_EXTKEY */
$EM_CONF[$_EXTKEY] = [
    'title'            => 'T3UP - Image',
    'description'      => 'Image extension for the t3up-package',
    'version'          => '1.0.0',
    'state'            => 'stable',
    'category'         => 'templates',
    'author'           => 'Michael Lang',
    'author_email'     => 'michael.lang@h-da.de',
    'author_company'   => 'h_da Hochschule Darmstadt',
    'uploadfolder'     => false,
    'clearCacheOnLoad' => true,
    'createDirs'       => '',
    'constraints'      => [
        'depends'   => [
            'typo3' => '10.4-11.5',
        ],
        'conflicts' => [],
        'suggests'  => [],
    ],
];