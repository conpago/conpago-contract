<?php


namespace Conpago\Routing\Contract;

use Conpago\Presentation\Contract\IController;

interface IRouter
{

    /**
     * Get controller instance.
     *
     * @return IController Returns instance of controller.
     *
     * @throws MissingRoutingException
     */
    public function getController();
}