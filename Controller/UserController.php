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

use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route; // used in annotations - do not remove
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method; // used in annotations - do not remove
use Symfony\Component\HttpFoundation\Request;
use Zikula\Core\Exception\FatalErrorException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Zikula\BreakItModule\Util as BreakItUtil;

/**
 * UI operations executable by general users.
 *
 * Class UserController
 * @package Zikula\BreakItModule\Controller
 */
class UserController extends \Zikula_AbstractController
{
    /**
     * @Route("/old/{break}")
     *
     * The default entry point.
     *
     * @throws \Exception of various types at will
     *
     * @return string
     */
    public function indexAction(Request $request, $break = null)
    {
        BreakItUtil::throwExceptions($this->get('router'), $break);

        return $this->response($this->view->fetch('User/view.tpl'));
    }

    /**
     * intentionally non-routed method
     *
     * @return \Symfony\Component\HttpFoundation\Response
     * @throws FatalErrorException
     * @throws \Exception
     */
    public function breakAction()
    {
        $break = $this->request->query->get('break', null);
        BreakItUtil::throwExceptions($this->get('router'), $break);

        return $this->response($this->view->fetch('User/break.tpl'));
    }
}
