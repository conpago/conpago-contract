<?php
/**
 * Created by PhpStorm.
 * User: Bartosz Gołek
 * Date: 27.11.13
 * Time: 19:24
 *
 * @package    Conpago-Contract
 * @subpackage Logging
 * @author     Bartosz Gołek <bartosz.golek@gmail.com>
 * @copyright  Copyright (c) 2015, Bartosz Gołek
 */

namespace Conpago\Logging\Contract;

/**
 * Provides configuration data for logger.
 */
interface ILoggerConfig
{

    /**
     * Get logging level.
     *
     * @return int Returns logging level.
     */
    public function getLogLevel();

    /**
     * Get path to log file.
     *
     * @return string Returns path to log file.
     */
    public function getLogFilePath();
}
