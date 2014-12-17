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
use Zikula\BreakItModule\Entity\Task;

/**
 * UI operations executable by general users.
 *
 * @Route("/form")
 *
 * Class NewController
 * @package Zikula\BreakItModule\Controller
 */
class FormController extends AbstractController
{
    /**
     * @Route("/test")
     *
     * @param Request $request
     *
     * @return Response
     */
    public function testAction(Request $request)
    {
        // create a task and give it some dummy data for this example
        $task = new Task();
        $task->setTask('Write a blog post');
        $task->setDueDate(new \DateTime('tomorrow'));

        $form = $this->createFormBuilder($task)
            ->add('task', 'text')
            ->add('dueDate', 'date')
            ->add('save', 'submit', array('label' => 'Create Task'))
            ->getForm();

        $request->attributes->set('_legacy', true); // forces template to render inside old theme
        return $this->render('ZikulaBreakItModule:New:form.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}