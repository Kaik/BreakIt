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

use ModUtil;
use UserUtil;
use DataUtil;
use SecurityUtil;
use System;
use Zikula\Core\RouteUrl;
use ZLanguage;
use Zikula\Core\Exception\FatalErrorException;
use Zikula\Core\Response\Ajax\UnavailableResponse;
use Zikula\Core\Response\Ajax\BadDataResponse;
use Zikula\Core\Response\PlainResponse;
use Zikula\Core\UrlInterface;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

use Zikula\Core\Response\Ajax\AjaxResponse;
use Zikula\BreakItModule\Util as BreakItUtil;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route; // used in annotations - do not remove
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method; // used in annotations - do not remove

/**
 * @Route("/ajax")
 */
class AjaxController extends \Zikula_Controller_AbstractAjax
{

    /**
     * @Route("", options={"expose"=true})
     * @Method("POST")
     *
     * @param Request $request
     *  null $break
     *
     * @return AjaxResponse
     */
    public function breakAction(Request $request)
    {
        $this->checkAjaxToken();
        $break = $request->request->get('break', null);

        BreakItUtil::throwExceptions($this->get('router'), $break);

        return new AjaxResponse('');
    }

    /**
     * intentionally non-routed method
     *
     *  null $break
     *
     * @return AjaxResponse
     */
    public function oldBreakAction()
    {
        $this->checkAjaxToken();
        $break = $this->request->request->get('break', null);

        BreakItUtil::throwExceptions($this->get('router'), $break);

        return new AjaxResponse('');
    }

    /**
     * Create and configure the view for the controller.
     *
     * NOTE: This is necessary because the Zikula_Controller_AbstractAjax overrides this method located in Zikula_AbstractController.
     */
    protected function configureView()
    {
        $this->setView();
        $this->view->setController($this);
        $this->view->assign('controller', $this);
    }
}