<?php

class ECash_Display_LegacySaveEmployment implements ECash_Display_ILegacySave
{
	public static function toModel(ECash_Request $request, DB_Models_WritableModel_1 &$model)
	{
		$model->employer_name = $request->employer_name;
		$model->job_tenure = $request->job_tenure;
		$model->job_title = $request->job_title;
		$model->phone_work = $request->phone_work;
		$model->phone_work_ext = $request->phone_work_ext;
		$model->income_monthly = $request->income_monthly;
		$model->date_hire = strtotime($request->date_hire);
		$model->modifying_agent_id = ECash::getAgent()->getAgentId();
	}

	public static function toResponse(stdClass &$response, DB_Models_WritableModel_1 $model)
	{
		$response->employer_name = $model->employer_name;
		$response->job_tenure = $model->job_tenure;
		$response->job_title = $model->job_title;
		$response->phone_work = $model->phone_work;
		$response->phone_work_ext = $model->phone_work_ext;
		$response->income_monthly = $model->income_monthly;
		$response->date_hire = Date('m-d-Y',$model->date_hire);
	}	
}

?>
