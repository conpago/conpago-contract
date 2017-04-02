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
 * Provides access to parsed web request data.
 */
interface IRequest
{

    /**
     * Get request method.
     *
     * @return string Returns request method.
     */
    public function getRequestMethod();

    /**
     * Get URI path info.
     *
     * @return string Returns URI path info.
     */
    public function getPathInfo();

    /**
     * Get URI query string.
     *
     * @return string Returns URI query string.
     */
    public function getQueryString();

    /**
     * Get content type.
     *
     * @return string Returns content type.
     */
    public function getContentType();

    /**
     * Get accept.
     *
     * @return string Returns accept header value.
     */
    public function getAccept();

    /**
     * Get request body.
     *
     * @return string Returns request body.
     */
    public function getBody();
}
