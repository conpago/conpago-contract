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

/**
 * Provides access to different application paths.
 */
interface IAppPath
{

    /**
     * Application root directory.
     *
     * @return IPath Returns application root directory path
     */
    public function root();

    /**
     * Application configuration directory.
     *
     * @return IPath Returns application configuration directory path
     */
    public function config();

    /**
     * Application cache directory.
     *
     * @return IPath Returns application cache directory path
     */
    public function cache();

    /**
     * Application sessions directory.
     *
     * @return IPath Returns application sessions directory path
     */
    public function sessions();

    /**
     * Application templates directory.
     *
     * @return IPath Returns application templates directory path
     */
    public function templates();

    /**
     * Application sources directory.
     *
     * @return IPath Returns application sources directory path
     */
    public function source();
}
