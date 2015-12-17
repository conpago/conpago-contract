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

use Conpago\File\Contract\IPath;

interface IAppPath
{

    /**
     * @return IPath
     */
    public function root();

    /**
     * @return IPath
     */
    public function config();

    /**
     * @return IPath
     */
    public function cache();

    /**
     * @return IPath
     */
    public function sessions();

    /**
     * @return IPath
     */
    public function templates();

    /**
     * @return IPath
     */
    public function source();
}
