<?php
/**
 * Created by PhpStorm.
 * User: Bartosz Gołek
 * Date: 09.11.13
 * Time: 15:30
 *
 * @package    Conpago-Contract
 * @subpackage Helpers
 * @author     Bartosz Gołek <bartosz.golek@gmail.com>
 * @copyright  Copyright (c) 2015, Bartosz Gołek
 */

namespace Conpago\Helpers\Contract;

/**
 * Provides masks for search application files.
 */
interface IAppMask
{

    /**
     * Get mask for IoC container modules.
     *
     * @return string Returns mask for IoC container modules.
     */
    public function moduleMask();

    /**
     * Get mask for configuration files.
     *
     * @return string Returns mask for configuration files.
     */
    public function configMask();
}
