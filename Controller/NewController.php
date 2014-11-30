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

namespace Zikula\BreakItModule\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Zikula\Core\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route; // used in annotations - do not remove
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method; // used in annotations - do not remove
use Zikula\BreakItModule\Util as BreakItUtil;

/**
 * UI operations executable by general users.
 *
 * @Route("/new")
 *
 * Class NewController
 * @package Zikula\BreakItModule\Controller
 */
class NewController extends AbstractController
{
    /**
     * @Route("/{break}")
     *
     * @param Request $request
     * @param string $break
     *
     * @return Response
     *
     * @throws \Exception of various types
     */
    public function indexAction(Request $request, $break = null)
    {
        BreakItUtil::throwExceptions($this->get('router'), $break);

        $request->attributes->set('_legacy', true); // forces template to render inside old theme
        return $this->render('ZikulaBreakItModule:New:index.html.twig', array('ZUserLoggedIn' => \UserUtil::isLoggedIn()));
    }
}