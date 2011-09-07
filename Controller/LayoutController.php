<?php

namespace Hollo\LayoutBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class LayoutController extends Controller
{
  public function renderTitleAction()
  {
    return new Response($this->container->getParameter('hollo_layout.title'));
  }
}
