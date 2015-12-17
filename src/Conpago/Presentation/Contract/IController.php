<?php
/**
 * Created by PhpStorm.
 * User: Bartosz Gołek
 * Date: 2014-03-31
 * Time: 22:25
 *
 * @package    Conpago-Contract
 * @subpackage Presentation
 * @author     Bartosz Gołek <bartosz.golek@gmail.com>
 * @copyright  Copyright (c) 2015, Bartosz Gołek
 */

namespace Conpago\Presentation\Contract;

use Conpago\Helpers\Contract\IRequestData;

/**
 * Provides controller basic functionality.
 */
interface IController
{

    /**
     * Execute controller.
     *
     * @param IRequestData $data Data gathered from request.
     *
     * @return void
     */
    public function execute(IRequestData $data);
}
