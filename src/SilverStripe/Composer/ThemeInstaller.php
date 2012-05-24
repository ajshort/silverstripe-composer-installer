<?php
/**
 * @package silverstripe-composer-installer
 */

namespace SilverStripe\Framework\ComposerInstaller;

use Composer\Installer\LibraryInstaller;
use Composer\Package\PackageInterface;

/**
 * A custom composer installer for installing silverstripe themes, installs them
 * to the "themes" directory.
 *
 * @package silverstripe-composer-installer
 */
class ThemeInstaller extends LibraryInstaller {

	public function supports($type) {
		return $type == 'silverstripe-theme';
	}

	public function getInstallPath(PackageInterface $package) {
		return "themes/" . array_pop(explode('/', $package->getName()));
	}

}
