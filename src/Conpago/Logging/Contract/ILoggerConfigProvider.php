<?php
	/**
	 * Created by PhpStorm.
	 * User: bg
	 * Date: 07.10.15
	 * Time: 19:08
	 */

	namespace Conpago\Logging\Contract;


	interface ILoggerConfigProvider {

		/**
		 * @return ILoggerConfig[]
		 */
		function getConfigs();
	}