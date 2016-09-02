<?php
/**
 * RequiredTest PHPUnit test file.
 *
 * @author Matt Piper <matt.piper@sellingsource.com>
 */

require_once('OLPBlackboxTestSetup.php');

/**
 * PHPUnit test class for the OLPBlackbox_Rule_Required class.
 *
 * @author Matt Piper <matt.piper@sellingsource.com>
 */
class OLPBlackbox_Rule_RequiredTest extends PHPUnit_Framework_TestCase
{
	/**
	 * Test for a required value that exists; should return TRUE
	 *
	 * @return void
	 */
	public function testRequiredExists()
	{
			$data = new Blackbox_DataTestObj(array('test' => 'woot'));
			$state_data = new Blackbox_StateData();

			$rule = $this->getMock('OLPBlackbox_Rule_Required', array('hitStat', 'hitEvent'));
			$rule->setupRule(array(
				OLPBlackbox_Rule::PARAM_FIELD => 'test',
			));
			
			$v = $rule->isValid($data, $state_data);
			$this->assertTrue($v);
	}
	
	/**
	 * Test for a required value that exists but is null; should return FALSE
	 *
	 * @return void
	 */
	public function testRequiredExistsButNull()
	{
			$data = new Blackbox_DataTestObj(array('test' => ''));
			$state_data = new Blackbox_StateData();

			$rule = $this->getMock('OLPBlackbox_Rule_Required', array('hitStat', 'hitEvent'));
			$rule->setupRule(array(
				OLPBlackbox_Rule::PARAM_FIELD => 'test',
			));
			
			$v = $rule->isValid($data, $state_data);
			$this->assertFalse($v);
	}
	
	/**
	 * Test for a required value that doesnt exist; should return FALSE
	 *
	 * @return void
	 */
	public function testRequiredNotExists()
	{
			$data = new Blackbox_DataTestObj(array('not_test' => 'woot'));
			$state_data = new Blackbox_StateData();

			$rule = $this->getMock('OLPBlackbox_Rule_Required', array('hitStat', 'hitEvent'));
			$rule->setupRule(array(
				OLPBlackbox_Rule::PARAM_FIELD => 'test',
			));

			$v = $rule->isValid($data, $state_data);
			$this->assertFalse($v);
	}
}
?>
