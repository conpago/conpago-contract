<?php
/**
 * Created by PhpStorm.
 * User: Bartosz Gołek
 * Date: 09.11.13
 * Time: 15:30
 *
 * @package    Conpago-Contract
 * @subpackage Presentation
 * @author     Bartosz Gołek <bartosz.golek@gmail.com>
 * @copyright  Copyright (c) 2015, Bartosz Gołek
 */

namespace Conpago\Presentation\Contract;

/**
 * Provides factory to create controller based of context.
 */
interface IControllerResolver
{

    /**
     * Get controller instance.
     *
     * @return IController Returns instance of controller.
     */
    public function getController();
}
