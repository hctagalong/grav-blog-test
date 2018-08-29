---
title: Ubuntu Guest VM Setup Notes
date: 10:00 01/03/2018
published: true
author: David Deemer
taxonomy:
    category: blog
    tag: [virtualbox, vm, notes]
---

Setting up a Ubuntu Guest VM

Miscellaneous notes for setting up a Ubuntu guest VM using VirtualBox. This is a working document; changes/updates should be expected.

===

### Problems with the network adapter?
I found that upon installation of Ubuntu (or any Linux image) if the VirtualBox networking wasn't setup properly that would lead to challenges with network connectivity. Sure; one can "fix" this from within Ubuntu itself. I've found this to be a little challenging and thus, take the easy route and just make sure that you have the VirtualBox adapters setup properly in the first place:
> Add the host-only adapter to the VirtualBox config and ensure that the host-only adapter had dhcp enabled!

### Shared folders
For shared folder to work properly, do this (after Ubuntu installation):
1. Mount the guest editions virtual disk (see the VirtualBox options)
2. Install; for a decent explanation [see here](https://devtidbits.com/2010/03/11/virtualbox-shared-folders-with-ubuntu-server-guest/)

### Setting up SSH on VirtualBox Ubuntu docker server  
How to setup ssh on virtualbox Ubuntu docker server; [read this](https://gitlab.com/help/ssh/README)

### Playing with Odoo?
For odoo; needed to create user in PostGres db...
