<?php
/**
 * Created by PhpStorm.
 * User: Bartosz Gołek
 * Date: 27.11.13
 * Time: 19:17
 *
 * @package    Conpago-Contract
 * @subpackage Logging
 * @author     Bartosz Gołek <bartosz.golek@gmail.com>
 * @copyright  Copyright (c) 2015, Bartosz Gołek
 */

namespace Conpago\Logging\Contract;

interface ILogger
{

    /**
     * @param string $message
     * @param array  $context
     *
     * @return void
     */
    function addDebug($message, array $context = []);

    /**
     * @param string $message
     * @param array  $context
     *
     * @return void
     */
    function addInfo($message, array $context = []);

    /**
     * @param string $message
     * @param array  $context
     *
     * @return void
     */
    function addNotice($message, array $context = []);

    /**
     * @param string $message
     * @param array  $context
     *
     * @return void
     */
    function addWarning($message, array $context = []);

    /**
     * @param string $message
     * @param array  $context
     *
     * @return void
     */
    function addError($message, array $context = []);

    /**
     * @param string $message
     * @param array  $context
     *
     * @return void
     */
    function addCritical($message, array $context = []);

    /**
     * @param string $message
     * @param array  $context
     *
     * @return void
     */
    function addAlert($message, array $context = []);

    /**
     * @param string $message
     * @param array  $context
     *
     * @return void
     */
    function addEmergency($message, array $context = []);
}
