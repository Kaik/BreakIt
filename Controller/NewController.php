<?php

namespace Zikula\BreakItModule\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Zikula\Core\Controller\AbstractController;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route; // used in annotations - do not remove
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method; // used in annotations - do not remove
use Zikula\Core\Exception\FatalErrorException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/**
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
                $request->attributes->set('_legacy', true); // forces template to render inside old theme
                return $this->render('ZikulaBreakItModule:New:index.html.twig');
        }
    }
}