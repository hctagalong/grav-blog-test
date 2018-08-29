---
title: Grav Theme Extention Notes
date: 10:00 01/03/2018
published: true
author: David Deemer
taxonomy:
    category: blog
    tag: [grav, notes]
---

Extending Grav Themes; Local Environment Notes

Miscellaneous notes for extending Grav themes. This is a working document; changes/updates should be expected.

===

### Extending A Grav Theme
The preferred approach to editing an existing Grav theme is to extend it. While you *could* edit it directly, that could cause problems when the theme is updated (for example, your hard work could be nuked!). Instead, extend the theme so that your changes are protected. While there is no guarantee that an update won't break your extension, at least you'll still have your work and an isolated directory to review for fixes.

### Local Environment
These notes are summarized from [Grav's very good documentation](https://getgrav.org/blog/theme-development-with-inheritance) on how to extend a theme.

###### General Steps
*__Note:__ All directories are relative to the site!*

1. Create ./user/themes/mythemename directory
  * Add blueprints.yaml
  * Add mythemename.php
  * Add mythemename.yaml
2. Update ./user/config/system.yaml; switch to new theme ("my theme")

- For my case; wanted to add new menu item; that was done in the site.yaml file
--- see structure
