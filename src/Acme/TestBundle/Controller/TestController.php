<?php

namespace Acme\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\FOSRestController,
    FOS\RestBundle\Controller\Annotations\Post,
    FOS\RestBundle\Controller\Annotations\View;

class TestController extends FOSRestController
{
    /**
     * @Post("/test")
     *
     * @View()
     */
    public function testAction(Request $request)
    {
        print_r($request->request->all());
    }
}
