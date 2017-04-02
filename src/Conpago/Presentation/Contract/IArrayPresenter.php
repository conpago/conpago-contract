<?php
/**
 * Created by PhpStorm.
 * User: bg
 * Date: 02.04.17
 * Time: 11:37
 */

namespace Conpago\Presentation\Contract;


interface IArrayPresenter
{
    /**
     * @param array $data
     *
     * @return void
     */
    public function showJson(array $data);
}