<?php 
	class Blackbox_Models_BlackboxType extends Blackbox_Models_WriteableModel
	{
		public function getColumns()
		{
			static $columns = array(
				'blackbox_type_id', 'name'
			);
			return $columns;
		}
		public function getPrimaryKey()
		{
			return array('blackbox_type_id');
		}
		public function getAutoIncrement()
		{
			return 'blackbox_type_id';
		}
		public function getTableName()
		{
			return 'blackbox_type';
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