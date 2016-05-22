<?php
use Ruckusing\Migration\Base as Ruckusing_Migration_Base;

class InsertSystemTableUserColumn extends Ruckusing_Migration_Base
{
    public function up()
    {
        $tables = [
            'directus_bookmarks',
            'directus_files',
            'directus_preferences'
        ];

        foreach($tables as $tableName) {
            $this->insert($tableName, [
                'table_name' => $tableName,
                'hidden' => 1,
                'single' => 0,
                'is_junction_table' => 0,
                'footer' => 0,
                'list_view' => NULL,
                'column_groupings' => NULL,
                'primary_column' => NULL,
                'user_create_column' => 'user',
                'user_update_column' => NULL,
                'date_create_column' => NULL,
                'date_update_column' => NULL
            ]);
        }
    }//up()

    public function down()
    {
    }//down()
}
