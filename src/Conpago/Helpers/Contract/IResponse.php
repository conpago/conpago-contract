<?php
/**
 * Created by PhpStorm.
 * User: Bartosz Gołek
 * Date: 2014-10-19
 * Time: 23:53
 *
 * @package    Conpago-Contract
 * @subpackage Helpers
 * @author     Bartosz Gołek <bartosz.golek@gmail.com>
 * @copyright  Copyright (c) 2015, Bartosz Gołek
 */

namespace Conpago\Helpers\Contract;

/**
 * Provides ability to set response Http code.
 */
interface IResponse
{

    /**
     * Set response code.
     *
     * @param integer $code Http response code.
     *
     * @return mixed
     */
    public function setHttpResponseCode($code);
}
