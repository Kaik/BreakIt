<?php
/**
 * Copyright Zikula Foundation 2014 - Zikula Application Framework
 *
 * This work is contributed to the Zikula Foundation under one or more
 * Contributor Agreements and licensed to You under the following license:
 *
 * @license MIT
 * @package Demo
 *
 * Please see the NOTICE file distributed with this source code for further
 * information regarding copyright and licensing.
 */

/**
 * UI operations executable by general users.
 */

namespace Zikula\BreakItModule\Controller;

use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route; // used in annotations - do not remove
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method; // used in annotations - do not remove
use Symfony\Component\HttpFoundation\Request;
use Zikula\Core\Exception\FatalErrorException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Exception\RouteNotFoundException;

class UserController extends \Zikula_AbstractController
{
    /**
     * @Route("/{break}")
     *
     * The default entry point.
     *
     * @throws \Exception of various types at will
     *
     * @return string
     */
    public function indexAction(Request $request, $break = null)
    {
        switch ($break) {
            case "AccessDeniedException":
                throw new AccessDeniedException();
                break;
            case "NotFoundHttpException":
                throw new NotFoundHttpException();
                break;
            case "RouteNotFoundException":
                $this->get('router')->generate('acmefoobarmodule_user_index');
                break;
            case "InvalidArgumentException":
                throw new \InvalidArgumentException();
                break;
            case "FatalErrorException":
                throw new FatalErrorException();
                break;
            case "RuntimeException":
                throw new \RuntimeException();
                break;
            case "Exception":
                throw new \Exception();
                break;
            default:
                return $this->response($this->view->fetch('User/view.tpl'));
        }
    }

}
