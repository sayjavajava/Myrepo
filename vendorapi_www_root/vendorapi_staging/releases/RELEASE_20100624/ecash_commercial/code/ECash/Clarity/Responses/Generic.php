<?php
/**
 * This is a generic response packet. It should only be used for parsing responses.
 * Never use for making/saving Clarity calls.
 *
 * @author Kyle Barrett <kyle.barrett@sellingsource.com>
 */
class ECash_Clarity_Responses_Generic extends Clarity_UW_Response implements ECash_Clarity_IResponse
{
	/**
	 * Gets the global decision from the Clarity response.
	 *
	 * @return string Global Decision
	 */

    public function getDecision()
    {
        if ($this->findNode('/ApplicationResponse/ApplicationInfo/TransactionStatus') == 'A') return 'Y';
        else return 'N';
    }

	/**
	 * Gets the Clarity authentication score.
	 *
	 * @return int Score
	 */ 
    public function getScore()
    {
        return $this->findNode('/ApplicationResponse/ApplicationInfo/LendProtectScore');
    }
	

	/**
	 * Gets customer pay rate (this has yet to be defined)
	 *
	 * @return NULL
	 */
	public function getPayRate()
	{
		return NULL;	
	}
	
	/**
	 * Is the package valid? It should be, it's generic.
	 */
	public function isValid()
	{
		return TRUE;
	}
	
	/**
	 * Get the global decision buckets.
	 */
	public function getDecisionBuckets()
	{
		return $this->getGlobalDecisionBuckets();	
	}
}
