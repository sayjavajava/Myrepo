<?php

/**
 * Response interface that the datax calls require
 */
interface TSS_Tribal_IResponse
{
	/**
	 * Parse an XML response from Tribal and handle
	 * whatever information is there
	 *
	 * @param string $xml
	 * @return void
	 */
	public function parseXML($xml);

	/**
	 * Whether the call passed or not
	 * @return bool
	 */
	public function isValid();

	/**
	 * Whether the response has an error
	 * @return bool
	 */
	public function hasError();

	/**
	 * Return some sort of In the form of MSG
	 *
	 * @return string
	 */
	public function getErrorMsg();

	/**
	 * MSG Free version of return code.. Totally healthy.
	 *
	 * @return string
	 */
	public function getErrorCode();
}
