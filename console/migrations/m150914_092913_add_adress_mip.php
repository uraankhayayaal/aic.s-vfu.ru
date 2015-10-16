<?php

use yii\db\Schema;
use yii\db\Migration;

class m150914_092913_add_adress_mip extends Migration
{
    public function up()
    {
        $this->addColumn( '{{%mip}}', 'phone', Schema::TYPE_INTEGER );
        $this->addColumn( '{{%mip}}', 'email', Schema::TYPE_STRING );
    }

    public function down()
    {
        $this->dropColumn('{{%mip}}', 'phone');
        $this->dropColumn('{{%mip}}', 'email');
    }
}
