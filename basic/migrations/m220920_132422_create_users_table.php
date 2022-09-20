<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%users}}`.
 */
class m220920_132422_create_users_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%users}}', [
            'id' => $this->primaryKey(),
            'first_name' => $this->string(300)->notNull()->append('COLLATE utf8mb4_estonian_ci CHARSET=utf8mb4'),
            'last_name' => $this->string(300)->notNull()->append('COLLATE utf8mb4_estonian_ci CHARSET=utf8mb4'),
        ], 'ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=COMPACT') ;

        $this->execute(file_get_contents('migrations/users.sql'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%users}}');
    }
}
