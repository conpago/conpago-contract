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

/**
 * Provides method to generate hash for passwords.
 */
interface IPasswordHasher
{

    /**
     * Calculate hash for given password.
     *
     * @param string $password Password to generate hash.
     *
     * @return string
     */
    public function calculateHash($password);
}
