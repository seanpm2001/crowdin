# TYPO3 Extension `crowdin`

This extensions enables the **In-Context Localization** feature of Crowdin for TYPO3.
Be aware that this requires the usage of the new translation server which is currently in beta state!

![Example](/Resources/Public/Screenshots/crowdin-incontext-localization.png)

## Requirements

- Account at https://crowdin.com/
- TYPO3 9.5 or 10.2+

## Setup

### Installation

Install the extension as any other TYPO3 extension:

- *Composer*: `composer require friendsoftypo3/crowdin` or
- Downloading it in TER
- Download it from [extensions.typo3.org/extension/crowdin](https://extensions.typo3.org/extension/crowdin)

### Use new translation server

#### Configuaration

Depending on the TYPO3 version, you need to configure your installation to use the new translation server:

- *TYPO3 10*: Please enable the feature `betaTranslationServer` in the Install Tool > Settings > Features.
- *TYPO3 9.x*: Xclass is used to change the translation server url, nothing to do.

#### Download language pack for language `t3`

Switch to the *Install Tool > Maintenance > Manage Language Packs* and
add the language *Crowdin In-Context Localization* with the language key `t3`.

![Language Packs](/Resources/Public/Screenshots/language-packs.png)

After that, download the language packs.

## Using In-Context Localization

Enable Crowdin's In-Context Localization by switching to *User settings* and switch language to *Crowdin In-Context Localization*

![Language Packs](/Resources/Public/Screenshots/user-settings.png)

It should now look like this:

![Language Packs](/Resources/Public/Screenshots/demo.png)

Just click on the labels and use all features of Crowdin!

## Troubleshooting

***Q:** I don't see something like in the last screenshot*

**A**: Check the l10n directory if there is a folder with the name `t3`. If not, please download the languages again. Also check if the new translation server is used


***Q:** I see labels like `[Unrecognized text]`*

**A**: Crowdin can only handle one project per time, ignore those labels or remove the extension directory from l10n/t3/.




