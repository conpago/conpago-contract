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

interface IRequestData
{

    /**
     * @return array
     */
    public function getUrlElements();

    /**
     * @return string
     */
    public function getRequestMethod();

    /**
     * @return array
     */
    public function getParameters();

    /**
     * @return string
     */
    public function getFormat();
}
