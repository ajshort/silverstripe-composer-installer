<?php
/**
 * @package silverstripe-composer-installer
 */

namespace SilverStripe\ComposerInstaller;

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
		$parts = explode('/', $package->getName());
		return "themes/" . end($parts);
	}

}
