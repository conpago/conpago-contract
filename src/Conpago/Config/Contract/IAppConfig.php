<?php
/**
 * Created by PhpStorm.
 * User: Bartosz Gołek
 * Date: 09.11.13
 * Time: 21:27
 *
 * @package    Conpago-Contract
 * @subpackage Config
 * @author     Bartosz Gołek <bartosz.golek@gmail.com>
 * @copyright  Copyright (c) 2015, Bartosz Gołek
 */

namespace Conpago\Config\Contract;

/**
 * Provides access to application configiration options.
 */
interface IAppConfig
{

    /**
     * Get name of default interactor to run when application is called without interactor specified in request.
     *
     * @return string Returns name of interactor.
     */
    public function getDefaultInteractor();

    /**
     * Get name of time zone.
     *
     * @return string Returns name of time zone.
     */
    public function getTimeZone();
}
