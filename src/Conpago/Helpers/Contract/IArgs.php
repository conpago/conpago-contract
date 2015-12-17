<?php
/**
 * Created by PhpStorm.
 * User: Bartosz Gołek
 * Date: 2014-06-18
 * Time: 23:32
 *
 * @package    Conpago-Contract
 * @subpackage Helpers
 * @author     Bartosz Gołek <bartosz.golek@gmail.com>
 * @copyright  Copyright (c) 2015, Bartosz Gołek
 */

namespace Conpago\Helpers\Contract;

interface IArgs
{

    public function getArguments();

    public function getScript();

    /**
     * @param string $option
     *
     * @return string
     */
    public function getOption($option);

    /**
     * @param string $option
     *
     * @return boolean
     */
    public function hasOption($option);
}
