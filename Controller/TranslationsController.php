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

use ZLanguage;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Zikula\Core\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route; // used in annotations - do not remove
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method; // used in annotations - do not remove
use Zikula\BreakItModule\Util as BreakItUtil;

/**
 * UI operations executable by general users.
 *
 * @Route("/translations")
 *
 * Class NewController
 * @package Zikula\BreakItModule\Controller
 */
class TranslationsController extends AbstractController
{
    /**
     * @Route("")
     *
     * @param Request $request
     * @param string $break
     *
     * @return Response
     *
     * @throws \Exception of various types
     */
    public function indexAction(Request $request)
    {
        
        //legacy
        $legacy['translator'] = \ZLanguage::getInstance();
        $legacy['translator']->bindModuleDomain($this->name);
        $legacy['locale'] = \ZLanguage::getLocale();        
        $legacy['installed_languages'] = \ZLanguage::getInstalledLanguages();
        //$legacy['domain'] = '';
        
        if (isset($this->trans)) 
        {
            // $this->trans its draks translator
            $drak['translator'] =  $this->trans;
        }else{            
            // $this->trans its draks translator
            $drak['translator'] =  false;            
        }       
        
        if (isset($this->translator))
        {
            // $this->trans its draks translator
            $zikulasymfony['translator'] =  $this->translator;            
        }else{
            // $this->trans its draks translator
            $zikulasymfony['translator'] =  false;        
        }
                
        //symfony
        $symfony['translator'] = $this->container->get('translator');
        $symfony['locale'] = $symfony['translator']->getLocale();
        
        
        $request->attributes->set('_legacy', true); // forces template to render inside old theme
        return $this->render('ZikulaBreakItModule:Translations:index.html.twig',
             array('ZUserLoggedIn' => \UserUtil::isLoggedIn(),
                   'legacy' => $legacy,
                   'drak' => $drak,
                   'symfony' => $symfony,
                   'zikulasymfony' => $zikulasymfony
             ));
    }


}