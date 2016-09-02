<?php

	//	$manager->Define_Task('Resolve_Payments_Due_Report', 'resolve_payments_due_report', null, null, array($server, $today), false); //no transaction
	require_once( SERVER_CODE_DIR . "accounts_recievable_report_query.class.php" );
	class ECash_NightlyEvent_ResolveARReport extends ECash_Nightly_Event
	{
		// Parameters used by the Cron Scheduler
		protected $business_rule_name = null;
		protected $timer_name = NULL;
		protected $process_log_name = NULL;
		protected $use_transaction = FALSE;
		
		public function __construct()
		{
			$this->classname = __CLASS__;
			
			parent::__construct();
		}
		
		public function run()
		{
			// Sets up the Applog, any other pre-requisites in the parent
			parent::run();
			
			$payments_due_object = new AR_Report_Query($this->server);
			$payments_due_data   = $payments_due_object->Fetch_Payments_Due_Data(str_replace("-","",$this->today),  $this->company_id, 'cli', true);
			
			
		}
	}


?>