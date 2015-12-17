<?php
/**
 * Created by PhpStorm.
 * User: Bartosz Gołek
 * Date: 09.11.13
 * Time: 15:30
 *
 * @package    Conpago-Contract
 * @subpackage Database
 * @author     Bartosz Gołek <bartosz.golek@gmail.com>
 * @copyright  Copyright (c) 2015, Bartosz Gołek
 */

namespace Conpago\Database\Contract;

/**
 * Provides configuration reader for database connection config.
 */
interface IDbConfig
{

    /**
     * Get database connection configuration.
     *
     * @return mixed Database connection configuration.
     */
    public function getConfig();
}
