<?php
/**
 * Defines the OLPBlackbox_Factory_Picker class.
 *
 * @author Matt Piper <matt.piper@sellingsource.com> 
 */

/**
 * Factory for OLP specific pickers.
 *
 * @author Matt Piper <matt.piper@sellingsource.com> 
 */
class OLPBlackbox_Factory_Picker
{
	/**
	 * Gets an instance of a picker.
	 *
	 * @param string $name The name of the picker
	 * @param bool $repick whether the picker should attempt a repick on a failed pickTarget call
	 * @return OLPBlackbox_IPicker
	 */
	public function getPicker($name, $repick = TRUE)
	{
		$name = implode('_', array_map('ucwords', explode('_', strtolower($name))));
		$class = 'OLPBlackbox_' . $name . 'Picker';
		
		if (!class_exists($class)) 
		{
			throw new InvalidArgumentException("Invalid picker $name given, {$class} doesn't exist.");
		}

		$instance = new $class($repick);
		
		return $instance;
	}
}
?>
