<?php
	/**
	 * Created by PhpStorm.
	 * User: Bartosz Gołek
	 * Date: 09.11.13
	 * Time: 15:30
	 */

	namespace Saigon\Conpago\Contract;

	interface IValidationResult
	{
		/**
		 * @return bool
		 */
		public function isValidationPassed();
	}