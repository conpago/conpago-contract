<?php


namespace Conpago\Routing\Config\Contract;


class MissingRoutingException extends \Exception
{

    /**
     */
    public function __construct($verb, $path)
    {
        parent::__construct("matching routing not found for request ${verb}: ${path}");
    }
}