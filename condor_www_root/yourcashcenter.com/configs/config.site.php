<?php
	
	// serves as a base for autogenerated urls and determines where forms post
	// you may wish to define it statically, if the autogeneration below dosent work
	$script_name = str_replace('//', '/', dirname($_SERVER['SCRIPT_NAME']).'/');
	define('URL_ROOT', 'http://'.$_SERVER['HTTP_HOST'].$script_name);
	
	// determines the fields on each page of the application
	// Warning: changing this will break the site!
	define('SITE_TYPE', 'soap');
	
	// name of the site
	define('SITE_URL', 'yourcashcenter.com');
	define('SITE_NAME', 'YourCashCenter.com');
	define('SITE_SKIN', 'YourCashCenter.com');
	
	// where the code lives
	define('DIR_CODE', '/virtualhosts/tss.2.shared.soap/');
	
	// determines the template to use for pages
	// pages without an entry use the "default" template
	$layout = array(
		//'app_allinone' => 'default',
		'view_docs' => 'blank',
		'preview_docs' => 'blank',
		'info_contactus_base' => array('template'=>'pop', 'css'=>'pop'),
		'info_contactus_app' => array('template'=>'pop', 'css'=>'pop'),
		'info_contactus_noapp' => array('template'=>'pop', 'css'=>'pop'),
		'info_privacy' => array('template'=>'pop', 'css'=>'pop'),
		'info_spam' => array('template'=>'pop', 'css'=>'pop'),
		'info_faq' => array('template'=>'pop', 'css'=>'pop'),
		'info_testimonials' => array('template'=>'pop', 'css'=>'pop'),
		'info_overview' => array('template'=>'pop', 'css'=>'pop'),
		'cs_removeme' => array('template'=>'pop', 'css'=>'pop'),
		'remove' => array('template'=>'pop', 'css'=>'pop'),
		'thanks_contactus' => array('template'=>'pop', 'css'=>'pop'),
		'thanks_remove' => array('template'=>'pop', 'css'=>'pop'),
		'qm_alpha' => array('template'=>'pop', 'css'=>'pop'),
		'qm_beta' => array('template'=>'pop', 'css'=>'pop'),
		'qm_bank' => array('template'=>'pop', 'css'=>'pop'),
	);
	
	function Get_Config($mode)
	{
		
		switch ($mode)
		{
			
			case MODE_LOCAL:
				$license = 'ccfbc42153db16b9eb1d1ed1073b5932';
				$server = 'prpc://bfw.1.edataserver.com.ds38.tss:8080/index.php';
				break;
				
			case MODE_RC:
				$license = 'fd24d635c58f47139455e6d541f81622';
				$server = 'prpc://rc.bfw.1.edataserver.com/index.php';
				break;
				
			case MODE_LIVE:
				$license = '982396b45ca962de72652cc3926910d7';
				$server = 'prpc://bfw.1.edataserver.com/index.php';
				break;
				
		}
		
		$wsdl_file = DIR_CODE.'/wsdl/olp_'.strtolower($mode).'.wsdl';
		
		// define some configuration variables
		define('LICENSE_KEY', $license);
		define('WSDL_FILE', $wsdl_file);
		define('EDATA_SERVER', $server);
		
		return;
		
	}
	
?>