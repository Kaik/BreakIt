<?php
/**
 * Copyright Zikula Foundation 2014 - Zikula Application Framework
 *
 * This work is contributed to the Zikula Foundation under one or more
 * Contributor Agreements and licensed to You under the following license:
 *
 * @license MIT
 * @package BreakIt
 *
 * Please see the NOTICE file distributed with this source code for further
 * information regarding copyright and licensing.
 */

namespace Zikula\BreakItModule;

/**
 * Class BreakItModuleInstaller
 * @package Zikula\BreakItModule
 */
class BreakItModuleInstaller extends \Zikula_AbstractInstaller
{

    /**
     * Initialise the module.
     *
     * @return boolean True on success or false on failure.
     */
    public function install()
    {
        return true;
    }

    /**
     * Upgrade the module from an old version.
     *
     * @param string $oldversion The version from which the upgrade is beginning (the currently installed version); this should be compatible
     *                              with {@link version_compare()}.
     *
     * @return boolean True on success or false on failure.
     */
    public function upgrade($oldversion)
    {
        switch ($oldversion) {
            case '1.0.0':
        }

        // Update successful
        return true;
    }

    /**
     * Delete the module.
     *
     * @return boolean True on success or false on failure.
     */
    public function uninstall()
    {
        return true;
    }

}
