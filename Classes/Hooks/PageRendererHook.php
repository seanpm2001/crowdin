<?php

declare(strict_types=1);

namespace FriendsOfTYPO3\Crowdin\Hooks;

/**
 * This file is part of the "crowdin" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

use FriendsOfTYPO3\Crowdin\Configuration\ExtensionConfiguration;
use TYPO3\CMS\Core\Authentication\BackendUserAuthentication;
use TYPO3\CMS\Core\Configuration\Features;
use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * Add JS to load Crowdin's InContext magic
 */
class PageRendererHook
{
    private const LANGUAGE_KEY = 't3';

    public function run(array &$params): void
    {
        if ($this->isEnabled() && $projectIdentifier = $this->getProjectIdentifier()) {
            $crowdinCode = '
                <script type="text/javascript">
                      var _jipt = [];
                      _jipt.push(["project", ' . GeneralUtility::quoteJSvalue($projectIdentifier) . ']);
                </script>
                <script type="text/javascript" src="https://cdn.crowdin.com/jipt/jipt.js"></script>';

            $params['jsLibs'] = $crowdinCode . $params['jsLibs'];
        }
    }

    protected function isEnabled(): bool
    {
        return $this->getBackendUser()->uc['lang'] === self::LANGUAGE_KEY;
    }

    protected function getProjectIdentifier(): string
    {
        return GeneralUtility::makeInstance(ExtensionConfiguration::class)
            ->getInlineTranslationProjectIdentifier();
    }

    protected function getBackendUser(): BackendUserAuthentication
    {
        return $GLOBALS['BE_USER'];
    }
}
