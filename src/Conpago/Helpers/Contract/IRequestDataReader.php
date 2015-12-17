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

interface IRequestDataReader
{

    /**
     * @return IRequestData
     */
    public function getRequestData();
}
