<?php

/**
 * Adds enterprise stuff to the target state data
 *
 * @author Andrew Minerd <andrew.minerd@sellingsource.com>
 */
class OLPBlackbox_Enterprise_TargetStateData extends OLPBlackbox_TargetStateData
{
	/**
	 * @param array $data assoc array of data to initialize the state object with.
	 * @return void
	 */
	function __construct($data = NULL)
	{
		$this->mutable_keys[] = 'customer_history';
		// also {@see OLPBlackbox_Enterprise_TargetCollectionStateData}
		$this->mutable_keys[] = 'loan_actions';

		parent::__construct($data);
	}
}

?>
