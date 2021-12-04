<?php

use yii\db\Migration;

/**
 * Class m211204_213728_user
 */
class m211204_213728_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('user', [
            'id' => $this->primaryKey(),
            'username' => $this->string(100)->notNull(),
            'password' => $this->string(100)->notNull(),
        ]);
        $this->insert('user',
            [
                'id' => 1,
                'username' => 'Admin',
                'password' => 'Admin'
            ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m211204_213728_user cannot be reverted.\n";

        return false;
    }

}
