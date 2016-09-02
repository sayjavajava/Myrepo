<?php 
	class Blackbox_Models_TargetCollectionClass extends Blackbox_Models_WriteableModel
	{
		public function getColumns()
		{
			static $columns = array(
				'target_collection_class_id', 'class'
			);
			return $columns;
		}
		public function getPrimaryKey()
		{
			return array('target_collection_class_id');
		}
		public function getAutoIncrement()
		{
			return 'target_collection_class_id';
		}
		public function getTableName()
		{
			return 'target_collection_class';
		}
		public function getColumnData()
		{
			$column_data = parent::getColumnData();
			
			return $column_data;
		}		
		public function setColumnData($data)
		{
			$this->column_data = $data;
			
		}
	}
?>