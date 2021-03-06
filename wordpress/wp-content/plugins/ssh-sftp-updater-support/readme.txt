=== SSH SFTP Updater Support ===
Contributors: DavidAnderson, TerraFrost, pmbaldha
Donate link: http://sourceforge.net/donate/index.php?group_id=198487
Tags: ssh, sftp
Requires at least: 3.1
Tested up to: 4.9
Stable tag: 0.7.4

"SSH SFTP Updater Support" is the easiest way to keep your Wordpress installation up-to-date with SFTP.

== Description ==

Keeping your Wordpress install up-to-date and installing plugins in a hassle-free manner is not so easy if your server uses SFTP. "SSH SFTP Updater Support" for Wordpress uses phpseclib to remedy this deficiency.

This plugin is offered and maintained as a free service to the WP community. You might also be interested in enhancing your WordPress site with our other top plugins, below.

* **[UpdraftPlus](https://updraftplus.com/?ref=212&source=sshsmtp)** simplifies backups and restoration. It is the #1 most-used backup/restore plugin, with over a million currently-active installs.
* **[UpdraftCentral](https://updraftplus.com/updraftcentral/?ref=212&source=sshsmtp)** - a highly efficient way to manage, optimize, update and backup multiple websites from one place.
* **[WP-Optimize](https://getwpo.com/)** helps you to optimize and clean your WordPress database so that it runs at maximum efficiency.
* **[Keyy](https://getkeyy.com/)**: Simple and secure logins with a wave of your phone.
* **[MetaSlider](https://www.metaslider.com)**: Easily create beautifully-designed sliders with the #1-most installed WP slider plugin.
* **More quality plugins**: **[Premium WooCommerce extensions](https://www.simbahosting.co.uk/s3/shop/)** | **[Other useful plugins](https://profiles.wordpress.org/davidanderson#content-plugins)**

== Installation ==

1. Upload the files to the `/wp-content/plugins/ssh-sftp-updater-support` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

== Changelog ==

= 0.7.4 - 2018/Aug/25 =

* TWEAK: Update phpseclib to latest version (1.0.10)
* TWEAK: Replace deprecated constructor for WP_Filesystem_SSH2 class
* TWEAK: Adds a "Other useful plugins" link on the plugin listing page and 'thank you' notice

= 0.7.3 =

* TWEAK: Update phpseclib to latest version (1.0.10)
* TWEAK: Ship complete phpseclib library so that other plugins using it after we have loaded it don't have problems
* TWEAK: Some minor internal re-factoring
* TWEAK: Adds a dismissable (and won't reappear for 12 months) notice about other plugins users may be interested in.

= 0.7.2 =
* update phpseclib to latest version

= 0.7.1 =
* remove deprecated function

= 0.7.0 =
* disable modal dialog and use full screen real page when prompting for information

= 0.6.1 =
* fix a few compatibility issues with 4.2

= 0.6 =
* update phpseclib to latest version
* make plugin work with 4.2's new modal dialog

= 0.5 =
* update phpseclib to latest version

= 0.4 =
* fix an E_NOTICE (thanks, runblip!)
* make it so keys that are copy / pasted in are saved with HTML5's localStorage (thanks, kkzk!)
* update phpseclib to latest Git

= 0.3 =
* update phpseclib to latest SVN
* read file when FTP_PRIKEY is defined (thanks, lkraav!)

= 0.2 =
* recursive deletes weren't working correctly (directories never got deleted - just files)
* use SFTP for recursive chmod instead of SSH / exec
* fix plugin for people using custom WP_CONTENT_DIR values (thanks, dd32!)
* plugin prevented non-SFTP install methods from being used
* make it so private keys can be uploaded in addition to being copy / pasted

= 0.1 =
* Initial Release

== Upgrade Notice ==
* 0.7.4: Update phpseclib to latest version (1.0.11), and prevent deprecation notice
