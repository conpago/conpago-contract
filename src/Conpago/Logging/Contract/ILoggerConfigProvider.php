<?php
/**
 * Created by PhpStorm.
 * User: bg
 * Date: 07.10.15
 * Time: 19:08
 *
 * @package    Conpago-Contract
 * @subpackage Logging
 * @author     Bartosz Gołek <bartosz.golek@gmail.com>
 * @copyright  Copyright (c) 2015, Bartosz Gołek
 */

namespace Conpago\Logging\Contract;

/**
 * Provides logging configurations.
 */
interface ILoggerConfigProvider
{

    /**
     * Get logger configurations.
     *
     * @return ILoggerConfig[] Returns array with multiple logging configurations.
     */
    public function getConfigs();
}
