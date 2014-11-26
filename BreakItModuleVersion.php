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
 * BreakIt module version information and other metadata.
 */
class BreakItModuleVersion extends \Zikula_AbstractVersion
{
    /**
     * Provides an array of standard Zikula Extension metadata.
     *
     * @return array Zikula Extension metadata.
     */
    public function getMetaData()
    {
        return array(
            'displayname' => $this->__('BreakIt'),
            'description' => $this->__('BreakIt'),
            'url' => $this->__('breakit'),
            'version' => '1.0.0',
            'core_min' => '1.4.0',
            'core_max' => '1.4.99',
            'securityschema' => array(
                $this->name.'::' => '::',
            )
        );
    }

}