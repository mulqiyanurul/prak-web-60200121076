<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%nilai}}`.
 */
class m230524_075417_create_nilai_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        
        $this->createTable('{{%nilai}}', [
            'id' => $this->primaryKey(),
            'id' => $this->primaryKey(),
            
            'no_ujian' => $this->integer(11)->notNull()->unique(),
            'nilai_ipa' => $this->integer(7)->notNull(),
            'nilai_ips' => $this->integer(10)->notNull(),
            'nilai__agama' => $this->integer(9)->unique(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%nilai}}');
    }
}
