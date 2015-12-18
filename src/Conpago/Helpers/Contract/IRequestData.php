<?php
/**
 * Created by PhpStorm.
 * User: Bartosz Gołek
 * Date: 2014-06-18
 * Time: 23:26
 *
 * @package    Conpago-Contract
 * @subpackage Helpers
 * @author     Bartosz Gołek <bartosz.golek@gmail.com>
 * @copyright  Copyright (c) 2015, Bartosz Gołek
 */

namespace Conpago\Helpers\Contract;

/**
 * Provides access to parsed request data.
 */
interface IRequestData
{

    /**
     *
     *
     * @return array
     */
    public function getUrlElements();

    /**
     * Get request method.
     *
     * @return string Returns request method.
     */
    public function getRequestMethod();

    /**
     * Get request parameters.
     *
     * @return array Returns request parameters.
     * Parameters are read from query string and body (POST/GET) and represented in tree structure.
     */
    public function getParameters();

    /**
     * @return string
     */
    public function getFormat();
}
