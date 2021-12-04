<?php

use yii\db\Migration;

/**
 * Class m211204_214411_party
 */
class m211204_214411_party extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('party', [
            'id' => $this->primaryKey(),
            'name' => $this->string(100)->notNull(),
            'email' => $this->string(100)->notNull(),
            'document' => $this->string(20)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m211204_214411_party cannot be reverted.\n";

        return false;
    }

}
