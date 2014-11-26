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

namespace Zikula\BreakItModule\Twig;

class BreakItExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('yesno', array($this, 'yesNo')),
        );
    }

    /**
     * convert a string|integer|boolean to "Yes" or "No" string
     *
     * @param $value
     * @return string
     */
    public function yesNo($value)
    {
        return (bool) $value ? __("Yes") : __("No");
    }

    public function getName()
    {
        return 'breakit_extension';
    }

    /**
     * Add the core config variable settings to twig templates
     *
     * @return array
     */
    public function getGlobals()
    {
        return array(
            'ZConfig' => \ModUtil::getVar(\ModUtil::CONFIG_MODULE)
        );
    }
}