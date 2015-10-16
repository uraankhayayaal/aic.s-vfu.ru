<?php

use yii\db\Schema;
use yii\db\Migration;

class m151016_072714_add_order_check_column extends Migration
{
    public function up()
    {
        $this->addColumn( '{{%order}}', 'is_new', Schema::TYPE_INTEGER );
    }

    public function down()
    {
        $this->dropColumn('{{%order}}', 'is_new');
    }
}
