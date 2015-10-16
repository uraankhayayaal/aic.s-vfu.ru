<?php

use yii\db\Schema;
use yii\db\Migration;

class m150929_065207_add_page_col_for_mip extends Migration
{
    public function up()
    {
        $this->addColumn( '{{%mip_ru}}', 'page', Schema::TYPE_TEXT );
        $this->addColumn( '{{%mip_en}}', 'page', Schema::TYPE_TEXT );
    }

    public function down()
    {
        $this->dropColumn('{{%mip_ru}}', 'page');
        $this->dropColumn('{{%mip_en}}', 'page');
    }
}
