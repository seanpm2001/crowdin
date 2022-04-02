.. include:: /Includes.rst.txt

======================
Integration of Crowdin
======================

:Extension key:
   crowdin

:Package name:
   friendsoftypo3/crowdin

:Version:
   |release|

:Language:
   en

:Author:
   Georg Ringer & TYPO3 contributors

:License:
   This document is published under the
   `Creative Commons BY 4.0 <https://creativecommons.org/licenses/by/4.0/>`__
   license.

:Rendered:
   |today|

----

This extensions enables the **In-Context Localization** feature of Crowdin for
TYPO3. Be aware that this requires the usage of the new translation server which
is currently in beta state!

----

**Table of Contents:**

.. contents::
   :backlinks: top
   :depth: 2
   :local:

Example
=======

.. image:: /Images/CrowdinInContextLocalization.png
   :alt: Example

Requirements
============

- Account at https://crowdin.com/
- TYPO3 9.5 or 10.2+

Setup
=====

Installation
------------

Install the extension as any other TYPO3 extension:

- Via Composer: :bash:`composer require friendsoftypo3/crowdin`.
- Installing it in the Extension Manager.
- Downloading it from `TER`_.

.. _TER: https://extensions.typo3.org/extension/crowdin

Configuration
-------------

Depending on the TYPO3 version, you need to configure your installation to use the new translation server:

- *TYPO3 10*: Please enable the feature `betaTranslationServer` in the Install Tool > Settings > Features.
- *TYPO3 9.x*: Xclass is used to change the translation server url, nothing to do.

Download language pack for language ``t3``
------------------------------------------

Switch to the *Install Tool > Maintenance > Manage Language Packs* and
add the language *Crowdin In-Context Localization* with the language key `t3`.

.. image:: /Images/LanguagePacks.png
   :alt: Language Packs

After that, download the language packs.

Using In-Context Localization
=============================

Enable Crowdin's In-Context Localization by switching to *User settings* and switch language to *Crowdin In-Context Localization*

.. image:: /Images/UserSettings.png
   :alt: User Settings

It should now look like this:

.. image:: /Images/Demo.png
   :alt: Demo

Just click on the labels and use all features of Crowdin!

Troubleshooting
===============

:Q:
   I don't see something like in the last screenshot.
:A:
   Check the l10n directory if there is a folder with the name `t3`. If not, please download the languages again. Also check if the new translation server is used.
:Q:
   I see labels like `[Unrecognized text]`
:A:
   Crowdin can only handle one project per time, ignore those labels or remove the extension directory from l10n/t3/.
