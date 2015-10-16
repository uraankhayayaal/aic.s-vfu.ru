<?php

use yii\db\Schema;
use yii\db\Migration;

class m150916_014209_add_colmn_in_setting_tbl extends Migration
{
    public function up()
    {
        $this->addColumn( '{{%setting}}', 'page', Schema::TYPE_STRING );
    }

    public function down()
    {
        $this->dropColumn('{{%setting}}', 'page');
    }
}
