<?php

/**
 * @package Validation
 */

/**
 * Alphabetic validator.
 *
 * @author Brian Feaver <brian.feaver@sellingsource.com>
 */
class Validation_AlphaNumeric_1 implements Validation_IValidator_1
{
	/**
	 * Whether we allow white space.
	 *
	 * @var bool
	 */
	protected $white_space;

	/**
	 * Constructor
	 *
	 * @param bool $white_space
	 */
	public function __construct($white_space = FALSE)
	{
		$this->white_space = (bool)$white_space;
	}

	/**
	 * Defined in Validation_IValidator_1.
	 *
	 * @param mixed $value
	 * @param ArrayObject $errors
	 * @return bool
	 */
	public function isValid($value, ArrayObject $errors)
	{
		$white_space = '';

		if ($this->white_space)
		{
			$white_space = '\s';
		}
		return (bool)preg_match("/^[{$white_space}A-Za-z0-9]+$/", $value);
	}

	/**
	 * Implements getMessage defined in Validation_IValidator_1.
	 *
	 * @return string
	 */
	public function getMessage()
	{
		return "must contain only alphabetic characters and numbers";
	}
}
