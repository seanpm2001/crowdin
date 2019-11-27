<?php
defined('TYPO3_MODE') or die();

$boot = static function () {
    if (TYPO3_MODE === 'BE') {
        $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_pagerenderer.php']['render-postProcess']['crowdin-inline-translation']
            = \FriendsOfTYPO3\Crowdin\Hooks\PageRendererHook::class . '->run';
    }

    if (version_compare(TYPO3_version, '10.0.0', '<')) {
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][\TYPO3\CMS\Install\Service\LanguagePackService::class] = [
            'className' => \FriendsOfTYPO3\Crowdin\Xclass\XclassedLanguagePackService::class,
        ];
    }

    $signalSlotDispatcher = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Extbase\SignalSlot\Dispatcher::class);
    $signalSlotDispatcher->connect(
        \TYPO3\CMS\Extensionmanager\Utility\InstallUtility::class,
        'afterExtensionInstall',
        \FriendsOfTYPO3\Crowdin\Hooks\InstallSlot::class,
        'setupCrowdinAfterInstall'
    );
    $signalSlotDispatcher->connect(
        \TYPO3\CMS\Extensionmanager\Utility\InstallUtility::class,
        'afterExtensionUninstall',
        \FriendsOfTYPO3\Crowdin\Hooks\InstallSlot::class,
        'removeCrowdinAfterInstall'
    );
};

$boot();
unset($boot);
