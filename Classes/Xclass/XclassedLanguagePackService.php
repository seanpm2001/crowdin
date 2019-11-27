<?php

declare(strict_types=1);

namespace FriendsOfTYPO3\Crowdin\Xclass;

/**
 * This file is part of the "crowdin" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

use TYPO3\CMS\Install\Service\LanguagePackService;

class XclassedLanguagePackService extends LanguagePackService
{
    private const URL = 'https://beta-translation.typo3.org/fileadmin/ter/';

    /**
     * @inheritDoc
     */
    public function updateMirrorBaseUrl(): string
    {
        $this->registry->set('languagePacks', 'baseUrl', self::URL);
        return self::URL;
    }
}
