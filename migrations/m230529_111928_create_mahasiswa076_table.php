<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%mahasiswa076}}`.
 */
class m230529_111928_create_mahasiswa076_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%mahasiswa076}}', [
            'id' => $this->primaryKey(),
            'no_induk_mahasiswa' => $this->string(100)->notNull(),
            'nama_mahasiswa' => $this->string(125)->notNull(),
            'kelas' => $this->string(100)->notNull(),
            'status' => $this->string(100)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%mahasiswa076}}');
    }
}
