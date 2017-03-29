<?php


namespace Conpago\Routing\Config\Contract;


interface IRoutingConfig
{
    /**
     * @param string $requestMethod
     * @param string $path
     *
     * @return string
     *
     * @throws MissingRoutingException
     */
    function getRoutings($requestMethod, $path);
}