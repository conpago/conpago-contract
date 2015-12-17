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

/**
 * Provides way to add messages to log with different logging levels (compatible with PSR-3).
 */
interface ILogger
{

    /**
     * Add debug level message to log.
     *
     * @param string $message Debug message to log.
     * @param array  $context Context of logging, used to format message string.
     *
     * @return void
     */
    public function addDebug($message, array $context = []);

    /**
     * Add info level message to log.
     *
     * @param string $message Info message to log.
     * @param array  $context Context of logging, used to format message string.
     *
     * @return void
     */
    public function addInfo($message, array $context = []);

    /**
     * Add notice level message to log.
     *
     * @param string $message Notice message to log.
     * @param array  $context Context of logging, used to format message string.
     *
     * @return void
     */
    public function addNotice($message, array $context = []);

    /**
     * Add warning level message to log.
     *
     * @param string $message Warning message to log.
     * @param array  $context Context of logging, used to format message string.
     *
     * @return void
     */
    public function addWarning($message, array $context = []);

    /**
     * Add error level message to log.
     *
     * @param string $message Error message to log.
     * @param array  $context Context of logging, used to format message string.
     *
     * @return void
     */
    public function addError($message, array $context = []);

    /**
     * Add critical level message to log.
     *
     * @param string $message Critical message to log.
     * @param array  $context Context of logging, used to format message string.
     *
     * @return void
     */
    public function addCritical($message, array $context = []);

    /**
     * Add alert level message to log.
     *
     * @param string $message Alert message to log.
     * @param array  $context Context of logging, used to format message string.
     *
     * @return void
     */
    public function addAlert($message, array $context = []);

    /**
     * Add emergency level message to log.
     *
     * @param string $message Emergency message to log.
     * @param array  $context Context of logging, used to format message string.
     *
     * @return void
     */
    public function addEmergency($message, array $context = []);
}
