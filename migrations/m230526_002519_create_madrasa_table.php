<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%madrasa}}`.
 */
class m230526_002519_create_madrasa_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%madrasa}}', [
            'id' => $this->primaryKey(),
            
            'nama_madrasa' => $this->string(11)->notNull(),
            'jumlah_peserta' => $this->integer(7)->notNull(),
            'provinsi_madrasa' => $this->string(10)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%madrasa}}');
    }
}
