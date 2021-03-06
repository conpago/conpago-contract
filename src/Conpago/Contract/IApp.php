<?php
/**
 * Created by PhpStorm.
 * User: Bartosz Gołek
 * Date: 09.11.13
 * Time: 15:30
 *
 * @package    Conpago-Contract
 * @subpackage Base
 * @author     Bartosz Gołek <bartosz.golek@gmail.com>
 * @copyright  Copyright (c) 2015, Bartosz Gołek
 */

namespace Conpago\Contract;

/**
 * Provides main Conpago application.
 */
interface IApp
{

    /**
     * Run application.
     *
     * @return void
     */
    public function run();
}
