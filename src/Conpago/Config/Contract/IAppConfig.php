<?php
/**
 * Created by PhpStorm.
 * User: Bartosz Gołek
 * Date: 09.11.13
 * Time: 21:27
 *
 * @package    Conpago-Contract
 * @subpackage Config
 * @author     Bartosz Gołek <bartosz.golek@gmail.com>
 * @copyright  Copyright (c) 2015, Bartosz Gołek
 */

namespace Conpago\Config\Contract;

interface IAppConfig
{

    public function getDefaultInteractor();

    public function getTimeZone();
}
