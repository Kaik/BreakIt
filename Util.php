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

use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Zikula\Core\Exception\FatalErrorException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\RouterInterface;

class Util {

    /**
     * @param RouterInterface $router
     * @param string $exception
     * @throws FatalErrorException
     * @throws \Exception
     */
    public static function throwExceptions(RouterInterface $router, $exception)
    {
        switch ($exception) {
            case "AccessDeniedException":
                throw new AccessDeniedException('This is a sample BreakIt error message for AccessDeniedException.');
                break;
            case "NotFoundHttpException":
                throw new NotFoundHttpException('This is a sample BreakIt error message for NotFoundHttpException.');
                break;
            case "RouteNotFoundException":
                // this unknown route will throw a \Symfony\Component\Routing\Exception\RouteNotFoundException
                $router->generate('acmefoobarmodule_user_index');
                break;
            case "InvalidArgumentException":
                throw new \InvalidArgumentException('This is a sample BreakIt error message for InvalidArgumentException.');
                break;
            case "FatalErrorException":
                throw new FatalErrorException('This is a sample BreakIt error message for FatalErrorException.');
                break;
            case "RuntimeException":
                throw new \RuntimeException('This is a sample BreakIt error message for RuntimeException.');
                break;
            case "Exception":
                throw new \Exception('This is a sample BreakIt error message for Exception.');
                break;
            default:
                // do nothing
        }
    }
} 