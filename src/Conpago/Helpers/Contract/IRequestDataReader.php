<?php
/**
 * Created by PhpStorm.
 * User: Bartosz Gołek
 * Date: 25.02.14
 * Time: 07:55
 *
 * @package    Conpago-Contract
 * @subpackage Helpers
 * @author     Bartosz Gołek <bartosz.golek@gmail.com>
 * @copyright  Copyright (c) 2015, Bartosz Gołek
 */

namespace Conpago\Helpers\Contract;

/**
 * Provides reader of request data.
 */
interface IRequestDataReader
{

    /**
     * Get request data.
     *
     * @return IRequestData Returns request data.
     */
    public function getRequestData();
}
