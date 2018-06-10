<?php
/**
 * Created by PhpStorm.
 * User: shipSun
 * Date: 2018/6/8
 * Time: 15:03
 */

namespace phpDocumentor\Composer;


namespace phpDocumentor\Composer;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class TemplateInstaller extends LibraryInstaller
{
    /**
     * {@inheritDoc}
     */
    public function getPackageBasePath(PackageInterface $package)
    {
        return 'data/templates/src';
    }
    /**
     * {@inheritDoc}
     */
    public function supports($packageType)
    {
        return 'symfony-bundle' === $packageType;
    }
}