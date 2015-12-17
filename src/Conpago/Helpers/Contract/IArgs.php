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

/**
 * Provides access to Cli command arguments and options.
 */
interface IArgs
{

    /**
     * Get arguments.
     *
     * @return string[] Returns array with all arguments passed by Cli.
     */
    public function getArguments();

    /**
     * Get arguments.
     *
     * @return string Returns name of executed script.
     */
    public function getScript();

    /**
     * Get value of particular option.
     *
     * @param string $option Option name.
     *
     * @return string Returns value of option with given name.
     */
    public function getOption($option);

    /**
     * Check is particular option set and has value.
     *
     * @param string $option Option name.
     *
     * @return string Returns true if option is set and has value, otherwise false.
     */
    public function hasOption($option);
}
