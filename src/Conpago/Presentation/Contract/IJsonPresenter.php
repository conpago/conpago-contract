<?php
/**
 * Created by PhpStorm.
 * User: bg
 * Date: 13.05.14
 * Time: 21:54
 *
 * @package    Conpago-Contract
 * @subpackage Presentation
 * @author     Bartosz Gołek <bartosz.golek@gmail.com>
 * @copyright  Copyright (c) 2015, Bartosz Gołek
 */

namespace Conpago\Presentation\Contract;

/**
 * Provides mechanism to present data as json object.
 */
interface IJsonPresenter
{

    /**
     * Show data on output.
     *
     * @param mixed $data Data to present.
     *
     * @return void
     */
    public function showJson($data);
}
