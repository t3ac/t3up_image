<?php

/*
 * This file is part of the package T3UP-package.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

defined('TYPO3_MODE') or die();


call_user_func(function()
{
   /**
    * Extension key
    */
   $extensionKey = 't3up_image';

   /**
    * Default TypoScript
    */
   \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
      $extensionKey,
      'Configuration/TypoScript/Setup/',
      'T3UP - Image Extension'
   );
});

