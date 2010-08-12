<?php defined('SYSPATH') or die('No direct access allowed.');

class EndpointmanTemplateList extends Bluebox_Record
{
    public function setTableDefinition()
    {
        $this->hasColumn('id', 'integer', 4, array('unsigned' => TRUE, 'notnull' => TRUE, 'primary' => TRUE,'autoincrement' => FALSE));
        $this->hasColumn('product_id', 'string', 11, array('notnull' => TRUE));
        $this->hasColumn('model_id', 'string', 10, array('notnull' => TRUE));
        $this->hasColumn('name', 'string', 255, array('notnull' => TRUE));
        $this->hasColumn('custom_cfg_data', 'blob');
        $this->hasColumn('config_files_override', 'string');
    }
}